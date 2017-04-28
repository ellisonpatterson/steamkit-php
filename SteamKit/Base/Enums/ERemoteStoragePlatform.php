<?php

namespace SteamKit\Base\Enums;

class ERemoteStoragePlatform
{
	const None = 0;
	const Windows = 1;
	const OSX = 2;
	const PS3 = 4;
	const Linux = 8;
	const Reserved1 = 8; // obsolete
	const Reserved2 = 16;
	const All = "-1";

	public static function getAllEnums()
	{
		$class = new ReflectionClass('ERemoteStoragePlatform');
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