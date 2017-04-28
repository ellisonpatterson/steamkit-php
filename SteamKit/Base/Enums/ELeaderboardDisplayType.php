<?php

namespace SteamKit\Base\Enums;

class ELeaderboardDisplayType
{
	const None = 0;
	const Numeric = 1;
	const TimeSeconds = 2;
	const TimeMilliSeconds = 3;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('ELeaderboardDisplayType');
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