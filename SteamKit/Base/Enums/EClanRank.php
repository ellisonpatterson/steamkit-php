<?php

namespace SteamKit\Base\Enums;

class EClanRank
{
	const None = 0;
	const Owner = 1;
	const Officer = 2;
	const Member = 3;
	const Moderator = 4;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EClanRank');
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