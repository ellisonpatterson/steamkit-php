<?php

namespace SteamKit\Base\Enums;

class ELeaderboardUploadScoreMethod
{
	const None = 0;
	const KeepBest = 1;
	const ForceUpdate = 2;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('ELeaderboardUploadScoreMethod');
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