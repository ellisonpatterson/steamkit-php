<?php

namespace SteamKit\Base\Enums;

class EWorkshopFileType
{
	const First = 0;
	const SteamworksAccessInvite = 13;
	const SteamVideo = 14;
	const GameManagedItem = 15;
	const Max = 16;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EWorkshopFileType');
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