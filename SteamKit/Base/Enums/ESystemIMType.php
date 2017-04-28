<?php

namespace SteamKit\Base\Enums;

class ESystemIMType
{
	const RawText = 0;
	const InvalidCard = 1;
	const RecurringPurchaseFailed = 2;
	const CardWillExpire = 3;
	const SubscriptionExpired = 4;
	const GuestPassReceived = 5;
	const GuestPassGranted = 6;
	const GiftRevoked = 7;
	const SupportMessage = 8;
	const SupportMessageClearAlert = 9;
	const Max = 10;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('ESystemIMType');
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