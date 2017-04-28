<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientLogon implements ISteamSerializableMessage
{
	const ObfuscationMask = 0xBAADF00D;
	const CurrentProtocol = 65579;
	const ProtocolVerMajorMask = 0xFFFF0000;
	const ProtocolVerMinorMask = 0xFFFF;
	const ProtocolVerMinorMinGameServers = 4;
	const ProtocolVerMinorMinForSupportingEMsgMulti = 12;
	const ProtocolVerMinorMinForSupportingEMsgClientEncryptPct = 14;
	const ProtocolVerMinorMinForExtendedMsgHdr = 17;
	const ProtocolVerMinorMinForCellId = 18;
	const ProtocolVerMinorMinForSessionIDLast = 19;
	const ProtocolVerMinorMinForServerAvailablityMsgs = 24;
	const ProtocolVerMinorMinClients = 25;
	const ProtocolVerMinorMinForOSType = 26;
	const ProtocolVerMinorMinForCegApplyPESig = 27;
	const ProtocolVerMinorMinForMarketingMessages2 = 27;
	const ProtocolVerMinorMinForAnyProtoBufMessages = 28;
	const ProtocolVerMinorMinForProtoBufLoggedOffMessage = 28;
	const ProtocolVerMinorMinForProtoBufMultiMessages = 28;
	const ProtocolVerMinorMinForSendingProtocolToUFS = 30;
	const ProtocolVerMinorMinForMachineAuth = 33;
	const ProtocolVerMinorMinForSessionIDLastAnon = 36;
	const ProtocolVerMinorMinForEnhancedAppList = 40;
	const ProtocolVerMinorMinForSteamGuardNotificationUI = 41;
	const ProtocolVerMinorMinForProtoBufServiceModuleCalls = 42;
	const ProtocolVerMinorMinForGzipMultiMessages = 43;
	const ProtocolVerMinorMinForNewVoiceCallAuthorize = 44;
	const ProtocolVerMinorMinForClientInstanceIDs = 44;

	public function getEMsg()
	{
		return $this->emsg;
	}

	public function __construct(array $values = [])
	{
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientLogon;
		$this->setValues($values);
	}

}

?>