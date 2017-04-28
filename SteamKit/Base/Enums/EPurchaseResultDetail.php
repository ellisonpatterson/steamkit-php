<?php

namespace SteamKit\Base\Enums;

class EPurchaseResultDetail
{
	const NoDetail = 0;
	const AVSFailure = 1;
	const InsufficientFunds = 2;
	const ContactSupport = 3;
	const Timeout = 4;
	const InvalidPackage = 5;
	const InvalidPaymentMethod = 6;
	const InvalidData = 7;
	const OthersInProgress = 8;
	const AlreadyPurchased = 9;
	const WrongPrice = 10;
	const FraudCheckFailed = 11;
	const CancelledByUser = 12;
	const RestrictedCountry = 13;
	const BadActivationCode = 14;
	const DuplicateActivationCode = 15;
	const UseOtherPaymentMethod = 16;
	const UseOtherFunctionSource = 17;
	const InvalidShippingAddress = 18;
	const RegionNotSupported = 19;
	const AcctIsBlocked = 20;
	const AcctNotVerified = 21;
	const InvalidAccount = 22;
	const StoreBillingCountryMismatch = 23;
	const DoesNotOwnRequiredApp = 24;
	const CanceledByNewTransaction = 25;
	const ForceCanceledPending = 26;
	const FailCurrencyTransProvider = 27;
	const FailedCyberCafe = 28;
	const NeedsPreApproval = 29;
	const PreApprovalDenied = 30;
	const WalletCurrencyMismatch = 31;
	const EmailNotValidated = 32;
	const ExpiredCard = 33;
	const TransactionExpired = 34;
	const WouldExceedMaxWallet = 35;
	const MustLoginPS3AppForPurchase = 36;
	const CannotShipToPOBox = 37;
	const InsufficientInventory = 38;
	const CannotGiftShippedGoods = 39;
	const CannotShipInternationally = 40;
	const BillingAgreementCancelled = 41;
	const InvalidCoupon = 42;
	const ExpiredCoupon = 43;
	const AccountLocked = 44;
	const OtherAbortableInProgress = 45;
	const ExceededSteamLimit = 46;
	const OverlappingPackagesInCart = 47;
	const NoWallet = 48;
	const NoCachedPaymentMethod = 49;
	const CannotRedeemCodeFromClient = 50;
	const PurchaseAmountNoSupportedByProvider = 51;
	const OverlappingPackagesInPendingTransaction = 52;
	const RateLimited = 53;
	const OwnsExcludedApp = 54;
	const CreditCardBinMismatchesType = 55;
	const CartValueTooHigh = 56;
	const BillingAgreementAlreadyExists = 57;
	const POSACodeNotActivated = 58;
	const CannotShipToCountry = 59;
	const HungTransactionCancelled = 60;
	const PaypalInternalError = 61;
	const UnknownGlobalCollectError = 62;
	const InvalidTaxAddress = 63;
	const PhysicalProductLimitExceeded = 64;
	const PurchaseCannotBeReplayed = 65;
	const DelayedCompletion = 66;
	const BundleTypeCannotBeGifted = 67;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EPurchaseResultDetail');
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