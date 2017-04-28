<?php

namespace SteamKit\Base\Enums;

class EActivationCodeClass
{
	const WonCDKey = 0;
	const ValveCDKey = 1;
	const Doom3CDKey = 2;
	const DBLookup = 3;
	const Steam2010Key = 4;
	const Max = 5;
	const Test = 2147483647;
	const Invalid = 4294967295;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EActivationCodeClass');
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