<?php

namespace SteamKit\Base\Enums;

class EFriendRelationship
{
	const None = 0;
	const Blocked = 1;
	const RequestRecipient = 2;
	const Friend = 3;
	const RequestInitiator = 4;
	const Ignored = 5;
	const IgnoredFriend = 6;
	const SuggestedFriend = 7;
	const Max = 8;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EFriendRelationship');
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