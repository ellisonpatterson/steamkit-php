<?php

namespace SteamKit\Base\Enums;

class EPersonaStateFlag
{
	const HasRichPresence = 1;
	const InJoinableGame = 2;
	const Golden = 4; // obsolete "no longer has any effect"
	const OnlineUsingWeb = 256; // obsolete "renamed to ClientTypeWeb"
	const ClientTypeWeb = 256;
	const OnlineUsingMobile = 512; // obsolete "renamed to ClientTypeMobile"
	const ClientTypeMobile = 512;
	const OnlineUsingBigPicture = 1024; // obsolete "renamed to ClientTypeTenfoot"
	const ClientTypeTenfoot = 1024;
	const OnlineUsingVR = 2048; // obsolete "renamed to ClientTypeVR"
	const ClientTypeVR = 2048;
	const LaunchTypeGamepad = 4096;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EPersonaStateFlag');
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