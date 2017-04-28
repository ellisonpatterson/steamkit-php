<?php

namespace SteamKit\Base\Enums;

class EContentDownloadSourceType
{
	const Invalid = 0;
	const CS = 1;
	const CDN = 2;
	const LCS = 3;
	const ProxyCache = 4;
	const LANPeer = 5;
	const Max = 5;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EContentDownloadSourceType');
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