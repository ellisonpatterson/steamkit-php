<?php

namespace SteamKit\Base\Enums;

class EMarketingMessageFlags
{
	const None = 0;
	const HighPriority = 1;
	const PlatformWindows = 2;
	const PlatformMac = 4;
	const PlatformLinux = 8;

	public static function PlatformRestrictions
	{
		return self::PlatformWindows | self::PlatformMac | self::PlatformLinux;
	}

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EMarketingMessageFlags');
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