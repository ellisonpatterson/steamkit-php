<?php

namespace SteamKit\Base\Enums;

class ERegionCode
{
	const USEast = 0;
	const USWest = 1;
	const SouthAmerica = 2;
	const Europe = 3;
	const Asia = 4;
	const Australia = 5;
	const MiddleEast = 6;
	const Africa = 7;
	const World = 255;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('ERegionCode');
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