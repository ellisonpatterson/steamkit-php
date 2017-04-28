<?php

namespace SteamKit\Base\Enums;

class EDenyReason
{
	const InvalidVersion = 1;
	const Generic = 2;
	const NotLoggedOn = 3;
	const NoLicense = 4;
	const Cheater = 5;
	const LoggedInElseWhere = 6;
	const UnknownText = 7;
	const IncompatibleAnticheat = 8;
	const MemoryCorruption = 9;
	const IncompatibleSoftware = 10;
	const SteamConnectionLost = 11;
	const SteamConnectionError = 12;
	const SteamResponseTimedOut = 13;
	const SteamValidationStalled = 14;
	const SteamOwnerLeftGuestUser = 15;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EDenyReason');
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