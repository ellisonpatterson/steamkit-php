<?php

namespace SteamKit\Base\Enums;

class EChatActionResult
{
	const Success = 1;
	const Error = 2;
	const NotPermitted = 3;
	const NotAllowedOnClanMember = 4;
	const NotAllowedOnBannedUser = 5;
	const NotAllowedOnChatOwner = 6;
	const NotAllowedOnSelf = 7;
	const ChatDoesntExist = 8;
	const ChatFull = 9;
	const VoiceSlotsFull = 10;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EChatActionResult');
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