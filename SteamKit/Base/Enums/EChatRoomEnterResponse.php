<?php

namespace SteamKit\Base\Enums;

class EChatRoomEnterResponse
{
	const Success = 1;
	const DoesntExist = 2;
	const NotAllowed = 3;
	const Full = 4;
	const Error = 5;
	const Banned = 6;
	const Limited = 7;
	const ClanDisabled = 8;
	const CommunityBan = 9;
	const MemberBlockedYou = 10;
	const YouBlockedMember = 11;
	const NoRankingDataLobby = 12; // obsolete
	const NoRankingDataUser = 13; // obsolete
	const RankOutOfRange = 14; // obsolete

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EChatRoomEnterResponse');
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