<?php

namespace SteamKit\Base\Enums;

class EPaymentMethod
{
	const None = 0;
	const ActivationCode = 1;
	const CreditCard = 2;
	const Giropay = 3;
	const PayPal = 4;
	const Ideal = 5;
	const PaySafeCard = 6;
	const Sofort = 7;
	const GuestPass = 8;
	const WebMoney = 9;
	const MoneyBookers = 10;
	const AliPay = 11;
	const Yandex = 12;
	const Kiosk = 13;
	const Qiwi = 14;
	const GameStop = 15;
	const HardwarePromo = 16;
	const MoPay = 17;
	const BoletoBancario = 18;
	const BoaCompraGold = 19;
	const BancoDoBrasilOnline = 20;
	const ItauOnline = 21;
	const BradescoOnline = 22;
	const Pagseguro = 23;
	const VisaBrazil = 24;
	const AmexBrazil = 25;
	const Aura = 26;
	const Hipercard = 27;
	const MastercardBrazil = 28;
	const DinersCardBrazil = 29;
	const AuthorizedDevice = 30;
	const MOLPoints = 31;
	const ClickAndBuy = 32;
	const Beeline = 33;
	const Konbini = 34;
	const EClubPoints = 35;
	const CreditCardJapan = 36;
	const BankTransferJapan = 37;
	const PayEasyJapan = 38; // obsolete "renamed to PayEasy"
	const PayEasy = 38;
	const Zong = 39;
	const CultureVoucher = 40;
	const BookVoucher = 41;
	const HappymoneyVoucher = 42;
	const ConvenientStoreVoucher = 43;
	const GameVoucher = 44;
	const Multibanco = 45;
	const Payshop = 46;
	const Maestro = 47; // obsolete "renamed to MaestroBoaCompra"
	const MaestroBoaCompra = 47;
	const OXXO = 48;
	const ToditoCash = 49;
	const Carnet = 50;
	const SPEI = 51;
	const ThreePay = 52;
	const IsBank = 53;
	const Garanti = 54;
	const Akbank = 55;
	const YapiKredi = 56;
	const Halkbank = 57;
	const BankAsya = 58;
	const Finansbank = 59;
	const DenizBank = 60;
	const PTT = 61;
	const CashU = 62;
	const AutoGrant = 64;
	const WebMoneyJapan = 65;
	const OneCard = 66;
	const PSE = 67;
	const Exito = 68;
	const Efecty = 69;
	const Paloto = 70;
	const PinValidda = 71;
	const MangirKart = 72;
	const BancoCreditoDePeru = 73;
	const BBVAContinental = 74;
	const SafetyPay = 75;
	const PagoEfectivo = 76;
	const Trustly = 77;
	const UnionPay = 78;
	const BitCoin = 79;
	const Wallet = 128;
	const Valve = 129;
	const SteamPressMaster = 130; // obsolete "renamed to MasterComp"
	const MasterComp = 130;
	const StorePromotion = 131; // obsolete "renamed to Promotional"
	const Promotional = 131;
	const OEMTicket = 256;
	const Split = 512;
	const Complimentary = 1024;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EPaymentMethod');
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