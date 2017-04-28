<?php

namespace SteamKit\Base\Enums;

class EClientPersonaStateFlag
{
	const Status = 1;
	const PlayerName = 2;
	const QueryPort = 4;
	const SourceID = 8;
	const Presence = 16;
	const Metadata = 32; // obsolete
	const LastSeen = 64;
	const ClanInfo = 128;
	const GameExtraInfo = 256;
	const GameDataBlob = 512;
	const ClanTag = 1024;
	const Facebook = 2048;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EClientPersonaStateFlag');
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