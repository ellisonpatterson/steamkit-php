<?php

namespace SteamKit\Base\Enums;

class EServerFlags
{
	const None = 0;
	const Active = 1;
	const Secure = 2;
	const Dedicated = 4;
	const Linux = 8;
	const Passworded = 16;
	const Private = 32;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EServerFlags');
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