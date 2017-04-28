<?php

namespace SteamKit\Base\Enums;

class ELicenseType
{
	const NoLicense = 0;
	const SinglePurchase = 1;
	const SinglePurchaseLimitedUse = 2;
	const RecurringCharge = 3;
	const RecurringChargeLimitedUse = 4;
	const RecurringChargeLimitedUseWithOverages = 5;
	const RecurringOption = 6;
	const LimitedUseDelayedActivation = 7;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('ELicenseType');
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