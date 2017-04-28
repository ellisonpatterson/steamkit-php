<?php

namespace SteamKit\Base\Enums;

class EChatPermission
{
	const Close = 1;
	const Invite = 2;
	const Talk = 8;
	const Kick = 16;
	const Mute = 32;
	const SetMetadata = 64;
	const ChangePermissions = 128;
	const Ban = 256;
	const ChangeAccess = 512;
	const Mask = 1019;

	public static function EveryoneNotInClanDefault
	{
		return self::Talk;
	}

	public static function EveryoneDefault
	{
		return self::Talk | self::Invite;
	}

	public static function MemberDefault
	{
		return self::Ban | self::Kick | self::Talk | self::Invite;
	}

	public static function OfficerDefault
	{
		return self::Ban | self::Kick | self::Talk | self::Invite;
	}

	public static function OwnerDefault
	{
		return self::ChangeAccess | self::Ban | self::SetMetadata | self::Mute | self::Kick | self::Talk | self::Invite | self::Close;
	}

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EChatPermission');
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