<?php

namespace SteamKit\Base\Enums;

class EUCMFilePrivacyState
{
	const Invalid = "-1";
	const Private = 2;
	const FriendsOnly = 4;
	const Public = 8;

	public static function All
	{
		return self::Public | self::FriendsOnly | self::Private;
	}

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EUCMFilePrivacyState');
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