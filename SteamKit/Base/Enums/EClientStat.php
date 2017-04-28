<?php

namespace SteamKit\Base\Enums;

class EClientStat
{
	const P2PConnectionsUDP = 0;
	const P2PConnectionsRelay = 1;
	const P2PGameConnections = 2;
	const P2PVoiceConnections = 3;
	const BytesDownloaded = 4;
	const Max = 5;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EClientStat');
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