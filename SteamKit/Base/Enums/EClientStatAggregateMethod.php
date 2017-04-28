<?php

namespace SteamKit\Base\Enums;

class EClientStatAggregateMethod
{
	const LatestOnly = 0;
	const Sum = 1;
	const Event = 2;
	const Scalar = 3;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EClientStatAggregateMethod');
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