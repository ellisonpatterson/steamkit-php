<?php

namespace SteamKit\Base\Enums;

class EEconTradeResponse
{
	const Accepted = 0;
	const Declined = 1;
	const TradeBannedInitiator = 2;
	const TradeBannedTarget = 3;
	const TargetAlreadyTrading = 4;
	const Disabled = 5;
	const NotLoggedIn = 6;
	const Cancel = 7;
	const TooSoon = 8;
	const TooSoonPenalty = 9;
	const ConnectionFailed = 10;
	const AlreadyTrading = 11;
	const AlreadyHasTradeRequest = 12;
	const NoResponse = 13;
	const CyberCafeInitiator = 14;
	const CyberCafeTarget = 15;
	const SchoolLabInitiator = 16;
	const SchoolLabTarget = 16;
	const InitiatorBlockedTarget = 18;
	const InitiatorNeedsVerifiedEmail = 20;
	const InitiatorNeedsSteamGuard = 21;
	const TargetAccountCannotTrade = 22;
	const InitiatorSteamGuardDuration = 23;
	const InitiatorPasswordResetProbation = 24;
	const InitiatorNewDeviceCooldown = 25;
	const InitiatorSentInvalidCookie = 26;
	const NeedsEmailConfirmation = 27;
	const InitiatorRecentEmailChange = 28;
	const NeedsMobileConfirmation = 29;
	const TradingHoldForClearedTradeOffersInitiator = 30;
	const WouldExceedMaxAssetCount = 31;
	const OKToDeliver = 50;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EEconTradeResponse');
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