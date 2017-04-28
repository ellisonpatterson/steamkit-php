<?php

namespace SteamKit\Base\Enums;

class EIntroducerRouting
{
	const FileShare = 0; // obsolete
	const P2PVoiceChat = 1;
	const P2PNetworking = 2;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EIntroducerRouting');
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