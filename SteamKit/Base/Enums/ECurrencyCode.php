<?php

namespace SteamKit\Base\Enums;

class ECurrencyCode
{
	const Invalid = 0;
	const USD = 1;
	const GBP = 2;
	const EUR = 3;
	const CHF = 4;
	const RUB = 5;
	const PLN = 6;
	const BRL = 7;
	const JPY = 8;
	const NOK = 9;
	const IDR = 10;
	const MYR = 11;
	const PHP = 12;
	const SGD = 13;
	const THB = 14;
	const VND = 15;
	const KRW = 16;
	const TRY = 17;
	const UAH = 18;
	const MXN = 19;
	const CAD = 20;
	const AUD = 21;
	const NZD = 22;
	const CNY = 23;
	const INR = 24;
	const CLP = 25;
	const PEN = 26;
	const COP = 27;
	const ZAR = 28;
	const HKD = 29;
	const TWD = 30;
	const SAR = 31;
	const AED = 32;
	const SEK = 33;
	const Max = 34;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('ECurrencyCode');
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