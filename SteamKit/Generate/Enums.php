<?php

// https://github.com/DoctorMcKay/node-steam-user/blob/master/scripts/generate-enums.js

namespace SteamKit\Generate;

class Enums
{
	protected $_enums = [];

	public function generateEnums()
	{
		\SteamKit\Helper\FileManager::createDirectory(APP_ROOT_FOLDER . 'Base/Enums');

		echo 'Generating Enums...' . "\n";

		foreach ($this->_enums as $enumFile) {
			$enumFile = 'Resources/SteamLanguage/' . $enumFile;
			$contents = explode(PHP_EOL, \SteamKit\Helper\FileManager::readFileData($enumFile));

			$currentEnum = null;
			foreach ($contents as $line) {
				$line = trim($line);
				$idx = strrpos($line, '//');
				if ($idx !== false) {
					$line = trim(substr($line, 0));
				}

				$match = false;
				if (!$currentEnum) {
					if (preg_match('/^enum (E[a-zA-Z0-9]+)(<[a-z]+>)?( flags)?/', $line, $match)) {
						$currentEnum = $match[1];
					}
				} else if (is_string($currentEnum)) {
					if ($line != '{') {
						echo 'ERROR PARSING ENUM FILE!';
						return false;
					} else {
						$currentEnum = [
							'name' => $currentEnum,
							'values' => [],
							'dynamicValues' => []
						];
					}
				} else {
					if (preg_match('/^};?$/', $line)) {
						$file = "<?php\n\nnamespace SteamKit\Base\Enums;\n\nclass " . $currentEnum['name'] . "\n{\n";
						foreach ($currentEnum['values'] as $value) {
							$file .= "\tconst " . $value['name'] . " = " . (ctype_digit($value['value']) ? $value['value'] : "\"" . $value['value'] . "\"") . ";" . (!empty($value['comment']) ? " // " . trim($value['comment']) : "") . "\n";
						}

						if (!empty($currentEnum['dynamicValues'])) {
							foreach ($currentEnum['dynamicValues'] as $idx => $value) {
								$file .= "\n\tpublic static function " . $value['name'] . "\n\t{\n\t\treturn " . $value['value'] . ";\n\t}\n";
							}
						}

						$file .= "\n\tpublic static function getAllEnums()\n\t{\n\t\t\$class = new \\ReflectionClass(get_called_class());\n\t\treturn \$class->getConstants();\n\t}\n";
						$file .= "\n\tpublic static function getByName(\$name)\n\t{\n\t\t\$constants = self::getAllEnums();\n\t\tif (array_key_exists(\$name, \$constants)) {\n\t\t\treturn \$constants[\$name];\n\t\t}\n\n\t\treturn false;\n\t}\n";
						$file .= "\n\tpublic static function getByValue(\$value)\n\t{\n\t\t\$constants = self::getAllEnums();\n\t\t\$key = array_search(\$value, \$constants);\n\t\tif (\$key !== null || \$key !== false) {\n\t\t\treturn \$key;\n\t\t}\n\n\t\treturn false;\n\t}\n";

						$file .= "}\n?>";

						\SteamKit\Helper\FileManager::writeFileData(APP_ROOT_FOLDER . 'Base/Enums/' . $currentEnum['name'] . '.php', $file);

						$currentEnum = null;
					} else if (preg_match('/^([A-Za-z0-9_]+) = ([^;]+);(.*)$/', $line, $match)) {
						$name = $match[1];
						$value = $match[2];
						$comment = $match[3];

						if (preg_match('/^0x[0-9A-Fa-f]+$/', $value)) {
							$value = (string) intval(substr($value, 2), 16);
						}

						$isDynamic = false;

						$flags = array_map(function($flag) use(&$isDynamic) {
							$flag = trim($flag);

							if (preg_match('/^-?[0-9]+$/', $flag)) {
								return $flag;
							} else {
								$isDynamic = true;
								return 'self::' . $flag;
							}
						}, explode('|', $value));

						$value = implode(' | ', $flags);

						if ($isDynamic) {
							$currentEnum['dynamicValues'][] = [
								'name' => $name,
								'value' => $value,
								'comment' => $comment
							];
						} else {
							$currentEnum['values'][] = [
								'name' => $name,
								'value' => $value,
								'comment' => $comment
							];
						}
					}
				}
			}
		}

		echo 'Enums have been generated!' . "\n";
	}

	public function addEnums(array $files)
	{
		foreach ($files as $file) {
			$this->addEnum($file);
		}
	}

	public function addEnum($file)
	{
		$this->_enums[] = $file;
	}

	public function getEnums()
	{
		return $this->_enums;
	}
}