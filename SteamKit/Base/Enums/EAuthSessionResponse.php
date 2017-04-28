<?php

namespace SteamKit\Base\Enums;

class EAuthSessionResponse
{
	const OK = 0;
	const UserNotConnectedToSteam = 1;
	const NoLicenseOrExpired = 2;
	const VACBanned = 3;
	const LoggedInElseWhere = 4;
	const VACCheckTimedOut = 5;
	const AuthTicketCanceled = 6;
	const AuthTicketInvalidAlreadyUsed = 7;
	const AuthTicketInvalid = 8;
	const PublisherIssuedBan = 9;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EAuthSessionResponse');
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