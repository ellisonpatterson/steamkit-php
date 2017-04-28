<?php

namespace SteamKit\Base\Enums;

class EResult
{
	const Invalid = 0;
	const OK = 1;
	const Fail = 2;
	const NoConnection = 3;
	const InvalidPassword = 5;
	const LoggedInElsewhere = 6;
	const InvalidProtocolVer = 7;
	const InvalidParam = 8;
	const FileNotFound = 9;
	const Busy = 10;
	const InvalidState = 11;
	const InvalidName = 12;
	const InvalidEmail = 13;
	const DuplicateName = 14;
	const AccessDenied = 15;
	const Timeout = 16;
	const Banned = 17;
	const AccountNotFound = 18;
	const InvalidSteamID = 19;
	const ServiceUnavailable = 20;
	const NotLoggedOn = 21;
	const Pending = 22;
	const EncryptionFailure = 23;
	const InsufficientPrivilege = 24;
	const LimitExceeded = 25;
	const Revoked = 26;
	const Expired = 27;
	const AlreadyRedeemed = 28;
	const DuplicateRequest = 29;
	const AlreadyOwned = 30;
	const IPNotFound = 31;
	const PersistFailed = 32;
	const LockingFailed = 33;
	const LogonSessionReplaced = 34;
	const ConnectFailed = 35;
	const HandshakeFailed = 36;
	const IOFailure = 37;
	const RemoteDisconnect = 38;
	const ShoppingCartNotFound = 39;
	const Blocked = 40;
	const Ignored = 41;
	const NoMatch = 42;
	const AccountDisabled = 43;
	const ServiceReadOnly = 44;
	const AccountNotFeatured = 45;
	const AdministratorOK = 46;
	const ContentVersion = 47;
	const TryAnotherCM = 48;
	const PasswordRequiredToKickSession = 49;
	const AlreadyLoggedInElsewhere = 50;
	const Suspended = 51;
	const Cancelled = 52;
	const DataCorruption = 53;
	const DiskFull = 54;
	const RemoteCallFailed = 55;
	const PasswordNotSet = 56; // obsolete "renamed to PasswordUnset"
	const PasswordUnset = 56;
	const ExternalAccountUnlinked = 57;
	const PSNTicketInvalid = 58;
	const ExternalAccountAlreadyLinked = 59;
	const RemoteFileConflict = 60;
	const IllegalPassword = 61;
	const SameAsPreviousValue = 62;
	const AccountLogonDenied = 63;
	const CannotUseOldPassword = 64;
	const InvalidLoginAuthCode = 65;
	const AccountLogonDeniedNoMailSent = 66; // obsolete "renamed to AccountLogonDeniedNoMail"
	const AccountLogonDeniedNoMail = 66;
	const HardwareNotCapableOfIPT = 67;
	const IPTInitError = 68;
	const ParentalControlRestricted = 69;
	const FacebookQueryError = 70;
	const ExpiredLoginAuthCode = 71;
	const IPLoginRestrictionFailed = 72;
	const AccountLocked = 73; // obsolete "renamed to AccountLockedDown"
	const AccountLockedDown = 73;
	const AccountLogonDeniedVerifiedEmailRequired = 74;
	const NoMatchingURL = 75;
	const BadResponse = 76;
	const RequirePasswordReEntry = 77;
	const ValueOutOfRange = 78;
	const UnexpectedError = 79;
	const Disabled = 80;
	const InvalidCEGSubmission = 81;
	const RestrictedDevice = 82;
	const RegionLocked = 83;
	const RateLimitExceeded = 84;
	const AccountLogonDeniedNeedTwoFactorCode = 85; // obsolete "renamed to AccountLoginDeniedNeedTwoFactor"
	const AccountLoginDeniedNeedTwoFactor = 85;
	const ItemOrEntryHasBeenDeleted = 86; // obsolete "renamed to ItemDeleted"
	const ItemDeleted = 86;
	const AccountLoginDeniedThrottle = 87;
	const TwoFactorCodeMismatch = 88;
	const TwoFactorActivationCodeMismatch = 89;
	const AccountAssociatedToMultiplePlayers = 90; // obsolete "renamed to AccountAssociatedToMultiplePartners"
	const AccountAssociatedToMultiplePartners = 90;
	const NotModified = 91;
	const NoMobileDeviceAvailable = 92; // obsolete "renamed to NoMobileDevice"
	const NoMobileDevice = 92;
	const TimeIsOutOfSync = 93; // obsolete "renamed to TimeNotSynced"
	const TimeNotSynced = 93;
	const SMSCodeFailed = 94;
	const TooManyAccountsAccessThisResource = 95; // obsolete "renamed to AccountLimitExceeded"
	const AccountLimitExceeded = 95;
	const AccountActivityLimitExceeded = 96;
	const PhoneActivityLimitExceeded = 97;
	const RefundToWallet = 98;
	const EmailSendFailure = 99;
	const NotSettled = 100;
	const NeedCaptcha = 101;
	const GSLTDenied = 102;
	const GSOwnerDenied = 103;
	const InvalidItemType = 104;
	const IPBanned = 105;
	const GSLTExpired = 106;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EResult');
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