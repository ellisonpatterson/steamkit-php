<?php

namespace SteamKit\Base\Enums;

class EBillingType
{
	const NoCost = 0;
	const BillOnceOnly = 1;
	const BillMonthly = 2;
	const ProofOfPrepurchaseOnly = 3;
	const GuestPass = 4;
	const HardwarePromo = 5;
	const Gift = 6;
	const AutoGrant = 7;
	const OEMTicket = 8;
	const RecurringOption = 9;
	const BillOnceOrCDKey = 10;
	const Repurchaseable = 11;
	const FreeOnDemand = 12;
	const Rental = 13;
	const NumBillingTypes = 14;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EBillingType');
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