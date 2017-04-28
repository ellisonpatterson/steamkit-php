<?php

namespace SteamKit\Base\Enums;

class ENewsUpdateType
{
	const AppNews = 0;
	const SteamAds = 1;
	const SteamNews = 2;
	const CDDBUpdate = 3;
	const ClientUpdate = 4;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('ENewsUpdateType');
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