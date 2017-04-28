<?php

namespace SteamKit\Base\Enums;

class EPersonaState
{
	const Offline = 0;
	const Online = 1;
	const Busy = 2;
	const Away = 3;
	const Snooze = 4;
	const LookingToTrade = 5;
	const LookingToPlay = 6;
	const Max = 7;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EPersonaState');
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