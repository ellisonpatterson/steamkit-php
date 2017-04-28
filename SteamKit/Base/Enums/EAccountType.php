<?php

namespace SteamKit\Base\Enums;

class EAccountType
{
	const Invalid = 0;
	const Individual = 1;
	const Multiseat = 2;
	const GameServer = 3;
	const AnonGameServer = 4;
	const Pending = 5;
	const ContentServer = 6;
	const Clan = 7;
	const Chat = 8;
	const ConsoleUser = 9;
	const AnonUser = 10;
	const Max = 11;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EAccountType');
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