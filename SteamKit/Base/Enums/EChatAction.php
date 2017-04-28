<?php

namespace SteamKit\Base\Enums;

class EChatAction
{
	const InviteChat = 1;
	const Kick = 2;
	const Ban = 3;
	const UnBan = 4;
	const StartVoiceSpeak = 5;
	const EndVoiceSpeak = 6;
	const LockChat = 7;
	const UnlockChat = 8;
	const CloseChat = 9;
	const SetJoinable = 10;
	const SetUnjoinable = 11;
	const SetOwner = 12;
	const SetInvisibleToFriends = 13;
	const SetVisibleToFriends = 14;
	const SetModerated = 15;
	const SetUnmoderated = 16;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EChatAction');
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