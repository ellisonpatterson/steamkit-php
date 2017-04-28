<?php

namespace SteamKit\Base\Enums;

class EWorkshopEnumerationType
{
	const RankedByVote = 0;
	const Recent = 1;
	const Trending = 2;
	const FavoriteOfFriends = 3;
	const VotedByFriends = 4;
	const ContentByFriends = 5;
	const RecentFromFollowedUsers = 6;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EWorkshopEnumerationType');
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