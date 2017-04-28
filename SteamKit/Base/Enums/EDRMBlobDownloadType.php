<?php

namespace SteamKit\Base\Enums;

class EDRMBlobDownloadType
{
	const Error = 0;
	const File = 1;
	const Parts = 2;
	const Compressed = 4;
	const AllMask = 7;
	const IsJob = 8;
	const HighPriority = 16;
	const AddTimestamp = 32;
	const LowPriority = 64;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EDRMBlobDownloadType');
		return $class->getConstants();
	}

	public static function getByName($name)
	{
		$constants = self::getAllEnums();
		if (array_key_exists($name, $constants)) {
			return $constants[$name];
		}

		return false;
	}

	public static function getByValue($value)
	{
		$constants = self::getAllEnums();
		$key = array_search($value, $constants);
		if ($key !== null || $key !== false) {
			return $key;
		}

		return false;
	}
}
?>