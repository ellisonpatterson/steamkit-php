<?php

namespace SteamKit\Base\Enums;

class EUniverse
{
	const Invalid = 0;
	const Public = 1;
	const Beta = 2;
	const Internal = 3;
	const Dev = 4;
	const Max = 5;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EUniverse');
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