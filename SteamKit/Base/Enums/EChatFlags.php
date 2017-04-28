<?php

namespace SteamKit\Base\Enums;

class EChatFlags
{
	const Locked = 1;
	const InvisibleToFriends = 2;
	const Moderated = 4;
	const Unjoinable = 8;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EChatFlags');
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