<?php

namespace SteamKit\Base\Enums;

class EUdpPacketType
{
	const Invalid = 0;
	const ChallengeReq = 1;
	const Challenge = 2;
	const Connect = 3;
	const Accept = 4;
	const Disconnect = 5;
	const Data = 6;
	const Datagram = 7;
	const Max = 8;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EUdpPacketType');
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