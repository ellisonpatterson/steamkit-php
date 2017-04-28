<?php

namespace SteamKit\Base\Enums;

class EServerType
{
	const Invalid = "-1";
	const First = 0;
	const Shell = 0;
	const GM = 1;
	const BUM = 2; // obsolete
	const BUMOBOSOLETE = 2; // obsolete
	const AM = 3;
	const BS = 4;
	const VS = 5;
	const ATS = 6;
	const CM = 7;
	const FBS = 8;
	const FG = 9; // obsolete "renamed to BoxMonitor"
	const BoxMonitor = 9;
	const SS = 10;
	const DRMS = 11;
	const HubOBSOLETE = 12; // obsolete
	const Console = 13;
	const ASBOBSOLETE = 14; // obsolete
	const PICS = 14;
	const Client = 15;
	const BootstrapOBSOLETE = 16; // obsolete;
	const DP = 17;
	const WG = 18;
	const SM = 19;
	const SLC = 20;
	const UFS = 21;
	const Util = 23;
	const DSS = 24; // obsolete "renamed to Community"
	const Community = 24;
	const P2PRelayOBSOLETE = 25; // obsolete
	const AppInformation = 26;
	const Spare = 27;
	const FTS = 28;
	const EPM = 29; // obsolete
	const EPMOBSOLETE = 29; // obsolete
	const PS = 30;
	const IS = 31;
	const CCS = 32;
	const DFS = 33;
	const LBS = 34;
	const MDS = 35;
	const CS = 36;
	const GC = 37;
	const NS = 38;
	const OGS = 39;
	const WebAPI = 40;
	const UDS = 41;
	const MMS = 42;
	const GMS = 43;
	const KGS = 44;
	const UCM = 45;
	const RM = 46;
	const FS = 47;
	const Econ = 48;
	const Backpack = 49;
	const UGS = 50;
	const Store = 51; // obsolete "renamed to StoreFeature"
	const StoreFeature = 51;
	const MoneyStats = 52;
	const CRE = 53;
	const UMQ = 54;
	const Workshop = 55;
	const BRP = 56;
	const GCH = 57;
	const MPAS = 58;
	const Trade = 59;
	const Secrets = 60;
	const Logsink = 61;
	const Market = 62;
	const Quest = 63;
	const WDS = 64;
	const ACS = 65;
	const PNP = 66;
	const TaxForm = 67;
	const ExternalMonitor = 68;
	const Parental = 69;
	const PartnerUpload = 70;
	const Partner = 71;
	const ES = 72;
	const DepotWebContent = 73;
	const ExternalConfig = 74;
	const GameNotifications = 75;
	const MarketRepl = 76;
	const MarketSearch = 77;
	const Localization = 78;
	const Steam2Emulator = 79;
	const PublicTest = 80;
	const SolrMgr = 81;
	const BroadcastRelay = 82;
	const BroadcastDirectory = 83;
	const VideoManager = 84;
	const TradeOffer = 85;
	const BroadcastChat = 86;
	const Phone = 87;
	const AccountScore = 88;
	const Support = 89;
	const LogRequest = 90;
	const LogWorker = 91;
	const EmailDelivery = 92;
	const InventoryManagement = 93;
	const Auth = 94;
	const StoreCatalog = 95;
	const HLTVRelay = 96;
	const Max = 97;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EServerType');
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