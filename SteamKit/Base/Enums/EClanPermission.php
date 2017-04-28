<?php

namespace SteamKit\Base\Enums;

class EClanPermission
{
	const Nobody = 0;
	const Owner = 1;
	const Officer = 2;
	const OwnerAndOfficer = 3;
	const Member = 4;
	const Moderator = 8;
	const OGGGameOwner = 16;
	const NonMember = 128;

	public static function OwnerOfficerModerator
	{
		return self::Owner | self::Officer | self::Moderator;
	}

	public static function AllMembers
	{
		return self::Owner | self::Officer | self::Moderator | self::Member;
	}

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EClanPermission');
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