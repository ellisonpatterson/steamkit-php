<?php

namespace SteamKit\Base\Enums;

class ELicenseFlags
{
	const None = 0;
	const Renew = 1;
	const RenewalFailed = 2;
	const Pending = 4;
	const Expired = 8;
	const CancelledByUser = 16;
	const CancelledByAdmin = 32;
	const LowViolenceContent = 64;
	const ImportedFromSteam2 = 128;
	const ForceRunRestriction = 256;
	const RegionRestrictionExpired = 512;
	const CancelledByFriendlyFraudLock = 1024;
	const NotActivated = 2048;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('ELicenseFlags');
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