<?php

namespace SteamKit\Base\Enums;

class EFriendFlags
{
	const None = 0;
	const Blocked = 1;
	const FriendshipRequested = 2;
	const Immediate = 4;
	const ClanMember = 8;
	const OnGameServer = 16;
	const RequestingFriendship = 128;
	const RequestingInfo = 256;
	const Ignored = 512;
	const IgnoredFriend = 1024;
	const Suggested = 2048;
	const ChatMember = 4096;
	const FlagAll = 65535;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EFriendFlags');
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