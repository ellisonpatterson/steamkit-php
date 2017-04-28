<?php

namespace SteamKit\Base\Enums;

class EPlatformType
{
	const Unknown = 0;
	const Win32 = 1;
	const Win64 = 2;
	const Linux = 3; // obsolete "split to Linux64 and Linux32"
	const Linux64 = 3;
	const OSX = 4;
	const PS3 = 5;
	const Linux32 = 6;
	const Max = 6;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EPlatformType');
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