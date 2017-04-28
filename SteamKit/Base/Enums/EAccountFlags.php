<?php

namespace SteamKit\Base\Enums;

class EAccountFlags
{
	const NormalUser = 0;
	const PersonaNameSet = 1;
	const Unbannable = 2;
	const PasswordSet = 4;
	const Support = 8;
	const Admin = 16;
	const Supervisor = 32;
	const AppEditor = 64;
	const HWIDSet = 128;
	const PersonalQASet = 256;
	const VacBeta = 512;
	const Debug = 1024;
	const Disabled = 2048;
	const LimitedUser = 4096;
	const LimitedUserForce = 8192;
	const EmailValidated = 16384;
	const MarketingTreatment = 32768;
	const OGGInviteOptOut = 65536;
	const ForcePasswordChange = 131072;
	const ForceEmailVerification = 262144;
	const LogonExtraSecurity = 524288;
	const LogonExtraSecurityDisabled = 1048576;
	const Steam2MigrationComplete = 2097152;
	const NeedLogs = 4194304;
	const Lockdown = 8388608;
	const MasterAppEditor = 16777216;
	const BannedFromWebAPI = 33554432;
	const ClansOnlyFromFriends = 67108864;
	const GlobalModerator = 134217728;
	const ParentalSettings = 268435456;
	const ThirdPartySupport = 536870912;
	const NeedsSSANextSteamLogon = 1073741824;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EAccountFlags');
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