<?php

namespace SteamKit\Helper;

class FileManager
{
	public static function getDataPath($dataPath = '')
	{
		if (strpos($dataPath, APP_ROOT_FOLDER) !== false) {
			return $dataPath;
		}

		return APP_ROOT_FOLDER . $dataPath;	
	}

	public static function createDirectory($path, $createIndexHtml = false)
	{
		$path = rtrim($path, DIRECTORY_SEPARATOR);
		$path .= DIRECTORY_SEPARATOR;

		if (file_exists($path) && is_dir($path)) {
			return true;
		}

		$path = str_replace('\\', '/', $path);
		$path = rtrim($path, '/');
		$parts = explode('/', $path);
		$pathPartCount = count($parts);
		$partialPath = '';

		$rootDir = self::getDataPath();

		// find the "lowest" part that exists (and is a dir)...
		for ($i = $pathPartCount - 1; $i >= 0; $i--) {
			$partialPath = implode('/', array_slice($parts, 0, $i + 1));

			if ($partialPath == $rootDir) {
				return false; // can't go above the root dir
			}

			if (file_exists($partialPath)) {
				if (!is_dir($partialPath)) {
					return false;
				} else {
					break;
				}
			}
		}

		if ($i < 0) {
			return false;
		}

		$i++; // skip over the last entry (as it exists)

		// ... now create directories for anything below it
		for (; $i < $pathPartCount; $i++) {
			$partialPath .= '/' . $parts[$i];
			if (!file_exists($partialPath)) {
				try {
					if (!mkdir($partialPath)) {
						return false;
					}
				} catch (Exception $e) {
					if (strpos($e->getMessage(), 'File exists') !== false) {
						// this means the directory already exists - race condition, we're ok
					} else {
						throw $e;
					}
				}
			}

			self::makeWritableByFtpUser($partialPath);

			if ($createIndexHtml) {
				$fp = @fopen($partialPath . '/index.html', 'w');
				if ($fp) {
					fwrite($fp, ' ');
					fclose($fp);

					self::makeWritableByFtpUser($partialPath . '/index.html');
				}
			}
		}

		return true;
	}

	public static function deleteDirectory($directory)
	{
		if (!file_exists($directory) || !is_dir($directory)) {
			return false;
		}

		$files = new \RecursiveIteratorIterator(
			new \RecursiveDirectoryIterator($directory, \RecursiveDirectoryIterator::SKIP_DOTS),
			\RecursiveIteratorIterator::CHILD_FIRST
		);

		foreach ($files as $fileinfo) {
			$todo = ($fileinfo->isDir() ? 'rmdir' : 'unlink');
			$todo($fileinfo->getRealPath());
		}

		rmdir($directory);

		return true;
	}

	public static function getFilesInDirectory($directory)
	{
		if (!file_exists($directory) || !is_dir($directory)) {
			return false;
		}

		$files = array();
		$discovered = new \RecursiveIteratorIterator(
			new \RecursiveDirectoryIterator($directory, \RecursiveDirectoryIterator::SKIP_DOTS),
			\RecursiveIteratorIterator::SELF_FIRST,
			\RecursiveIteratorIterator::CATCH_GET_CHILD
		);

		foreach ($discovered as $file => $dir) {
			if (!$dir->isDir()) {
				$files[] = $file;
			}
		}

		return $files;
	}

	public static function modifyFile($file, array $actions = array())
	{
		if (!$contents = self::readFileData($file)) {
			return false;
		}

		foreach ($actions as $type => $details) {
			if ($type == 'append') {
				foreach ($details as $append) {
					if (isset($append['ifNotExists']) && $append['ifNotExists'] && strpos($contents, $append['exists']) !== false) {
						$contents = preg_replace('/(' . $append['replace'] . ')/im', '', $contents);
					}

					if (isset($append['toTop']) && $append['toTop']) {
						$contents = $append['append'] . $contents;
					} else if (isset($append['afterText']) && $append['afterText']) {
						$contents = preg_replace('/(' . $append['find'] . ')/im', "$0" . $append['insert'], $contents);
					} else {
						$contents = $contents . $append['append'];
					}
				}
			}

			if ($type == 'replace') {
				foreach ($details as $replace) {
					$contents = preg_replace('/(' . $replace['find'] . ')/im', $replace['replace'], $contents);
				}
			}
		}

		return self::writeFileData($file, $contents);
	}

	public static $chmodDirectory = null;
	public static $chmodFile = null;

	public static function makeWritableByFtpUser($file)
	{
		if (self::$chmodDirectory === null) {
			self::$chmodDirectory = 0 | 0111;
			self::$chmodFile = 0;

			if (!self::$chmodFile) {
				$selfWritable = null;
				if (PHP_SAPI == 'cli') {
					$uid = false;
					if (function_exists('posix_getuid')) {
						$uid = @posix_getuid();
					} else {
						$tempFile = tempnam(self::getTempDir(), 'steambot');
						if ($tempFile) {
							$uid = fileowner($tempFile);
							@unlink($tempFile);
						}
					}
				}

				if ($selfWritable === null) {
					$selfWritable = @is_writable(__FILE__);
				}

				if ($selfWritable) {
					// writable - probably owned by ftp user already
					self::$chmodDirectory = 0755;
					self::$chmodFile = 0644;
				} else {
					// not writable, so file is probably owned by "nobody", need to w+w it
					self::$chmodDirectory = 0777;
					self::$chmodFile = 0666;
				}
			}
		}

		if (@is_readable($file)) {
			return @chmod($file, @is_file($file) ? self::$chmodFile : self::$chmodDirectory);
		} else {
			return false;
		}
	}

	public static function writeFileData($name, $data)
	{
		if (empty($data)) {
			return false;
		}

		$temporary = mt_rand(0, 100000);
		$file = self::getDataPath($name);

		if (file_put_contents($file, $data, LOCK_EX) === false) {
			return false;
		}

		self::makeWritableByFtpUser($file);
	}

	public static function readFileData($name)
	{
		$file = self::getDataPath($name);

		if (!$file) {
			self::createDirectory(substr($file, 0, strrpos($file, '/')), true);

			return false;
		}

		if (file_exists($file)) {
			$fh = fopen($file, 'r');
			$content = fread($fh, filesize($file));
			fclose($fh);

			return $content;
		}

		return false;
	}

	public static function getFileExtension($filename)
	{
		return strtolower(substr(strrchr($filename, '.'), 1));
	}
}