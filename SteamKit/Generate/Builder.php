<?php

namespace SteamKit\Generate;

use SteamKit\Generate\Protobufs;
use SteamKit\Generate\Enums;
use SteamKit\Generate\SteamLanguages;
use SteamKit\Generate\SteamServers;

class Builder
{
	protected $_protobufs;
	protected $_enums;
	protected $_steamLanguages;
	protected $_steamServers;

	public function __construct()
	{
		$this->_protobufs = new Protobufs();
		$this->_enums = new Enums();
		$this->_steamLanguages = new SteamLanguages();
		$this->_steamServers = new SteamServers();
	}

	public function addSteamClientProtobufs()
	{
		$this->_protobufs->addProtobufs([
			['file' => 'steamclient/steammessages_base.proto', 'output' => 'SteamMsgBase'],
			['file' => 'steamclient/encrypted_app_ticket.proto', 'output' => 'SteamMsgAppTicket'],
			['file' => 'steamclient/steammessages_clientserver.proto', 'output' => 'SteamMsgClientServer', 'include' => ['steamclient'], 'replacements' => ['steammessages_base']],
			['file' => 'steamclient/steammessages_clientserver_2.proto', 'output' => 'SteamMsgClientServer2', 'include' => ['steamclient'], 'replacements' => ['steammessages_base']],
			['file' => 'steamclient/content_manifest.proto', 'output' => 'ContentManifest', 'replacements' => ['steamclient']],

			['file' => 'steamclient/steammessages_unified_base.steamclient.proto', 'output' => 'Unified/SteamMsgUnifiedBase', 'include' => ['steamclient'], 'replacements' => ['steammessages_base']],
			['file' => 'steamclient/steammessages_broadcast.steamclient.proto', 'output' => 'Unified/SteamMsgBroadcast', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_cloud.steamclient.proto', 'output' => 'Unified/SteamMsgCloud', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_credentials.steamclient.proto', 'output' => 'Unified/SteamMsgCredentials', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_depotbuilder.steamclient.proto', 'output' => 'Unified/SteamMsgDepotBuilder', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_deviceauth.steamclient.proto', 'output' => 'Unified/SteamMsgDeviceAuth', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_econ.steamclient.proto', 'output' => 'Unified/SteamMsgEcon', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_gamenotifications.steamclient.proto', 'output' => 'Unified/SteamMsgGameNotifications', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_gameservers.steamclient.proto', 'output' => 'Unified/SteamMsgGameServers', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_linkfilter.steamclient.proto', 'output' => 'Unified/SteamMsgLinkFilter', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_inventory.steamclient.proto', 'output' => 'Unified/SteamMsgInventory', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_offline.steamclient.proto', 'output' => 'Unified/SteamMsgOffline', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_parental.steamclient.proto', 'output' => 'Unified/SteamMsgParental', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_partnerapps.steamclient.proto', 'output' => 'Unified/SteamMsgPartnerApps', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_physicalgoods.steamclient.proto', 'output' => 'Unified/SteamMsgPhysicalGoods', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_player.steamclient.proto', 'output' => 'Unified/SteamMsgPlayer', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_publishedfile.steamclient.proto', 'output' => 'Unified/SteamMsgPublishedFile', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_secrets.steamclient.proto', 'output' => 'Unified/SteamMsgSecrets', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_site_license.steamclient.proto', 'output' => 'Unified/SteamMsgSiteLicense', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_twofactor.steamclient.proto', 'output' => 'Unified/SteamMsgTwoFactor', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
			['file' => 'steamclient/steammessages_video.steamclient.proto', 'output' => 'Unified/SteamMsgVideo', 'include' => ['steamclient'], 'replacements' => ['steammessages_base', 'steammessages_unified_base']],
		]);
	}

	public function addGCProtobufs()
	{
		$this->_protobufs->addProtobufs([
			['file' => 'gc/gc.proto', 'output' => 'GC/MsgBaseGC'],
		]);		
	}

	public function addCSGOProtobufs()
	{
		$this->_protobufs->addProtobufs([
			['file' => 'csgo/steammessages.proto', 'output' => 'GC/CSGO/SteamMsgBase', 'include' => ['csgo']],
			['file' => 'csgo/gcsystemmsgs.proto', 'output' => 'GC/CSGO/SteamMsgGCSystem', 'include' => ['csgo'], 'replacements' => ['csgo']],
			['file' => 'csgo/base_gcmessages.proto', 'output' => 'GC/CSGO/SteamMsgGC', 'include' => ['csgo'], 'replacements' => ['csgo']],
			['file' => 'csgo/gcsdk_gcmessages.proto', 'output' => 'GC/CSGO/SteamMsgGCSDK', 'include' => ['csgo'], 'replacements' => ['csgo']],
			['file' => 'csgo/econ_gcmessages.proto', 'output' => 'GC/CSGO/SteamMsgGCEcon', 'include' => ['csgo'], 'replacements' => ['csgo']],
			['file' => 'csgo/engine_gcmessages.proto', 'output' => 'GC/CSGO/SteamMsgGCEngine', 'include' => ['csgo'], 'replacements' => ['csgo']],
		]);
	}

	public function addCStrikeProtobufs()
	{
		$this->_protobufs->addProtobufs([
			['file' => 'cstrike/htmlmessages.proto', 'output' => 'GC/CStrike/HTMLMessages'],
		]);		
	}

	public function addCStrikeBetaProtobufs()
	{
		$this->_protobufs->addProtobufs([
			['file' => 'cstrike_beta/steammessages.proto', 'output' => 'GC/CStrikeBeta/SteamMsgBase', 'include' => ['cstrike_beta']],
			['file' => 'cstrike_beta/base_gcmessages.proto', 'output' => 'GC/CStrikeBeta/SteamMsgGC', 'include' => ['cstrike_beta']],
			['file' => 'cstrike_beta/gcsdk_gcmessages.proto', 'output' => 'GC/CStrikeBeta/SteamMsgGCSDK', 'include' => ['cstrike_beta']],
		]);		
	}

	public function addTF2Protobufs()
	{
		$this->_protobufs->addProtobufs([
			['file' => 'tf/steammessages.proto', 'output' => 'GC/TF2/SteamMsgBase', 'include' => ['tf']],
			['file' => 'tf/econ_gcmessages.proto', 'output' => 'GC/TF2/SteamMsgGCEcon', 'include' => ['tf']],
			['file' => 'tf/gcsdk_gcmessages.proto', 'output' => 'GC/TF2/SteamMsgGCSDK', 'include' => ['tf']],
			['file' => 'tf/gcsystemmsgs.proto', 'output' => 'GC/TF2/SteamMsgGCSystem', 'include' => ['tf']],
			['file' => 'tf/base_gcmessages.proto', 'output' => 'GC/TF2/SteamMsgGC', 'include' => ['tf']],
			['file' => 'tf/tf_gcmessages.proto', 'output' => 'GC/TF2/MsgGC', 'include' => ['tf']],
			['file' => 'tf/steamdatagram_messages.proto', 'output' => 'GC/TF2/SteamDatagramMsg', 'include' => ['tf']],
		]);
	}

	public function addDODProtobufs()
	{
		$this->_protobufs->addProtobufs([
			['file' => 'dod/htmlmessages.proto', 'output' => 'GC/DOD/HTMLMessages'],
		]);
	}

	public function addAllEnums()
	{
		$this->_enums->addEnums([
			'emsg.steamd',
			'enums.steamd',
			'eresult.steamd',
			'gamecoordinator.steamd',
			'header.steamd',
			'netheader.steamd',
			'steammsg.steamd',
		]);
	}

	public function addAllSteamLanguages()
	{
		$this->_steamLanguages->addSteamLanguages([
			['file' => 'header.steamd', 'interface' => 'ISteamSerializableHeader'],
			['file' => 'netheader.steamd', 'interface' => 'ISteamSerializable'],
			['file' => 'gamecoordinator.steamd', 'interface' => 'IGCSerializableHeader'],
			['file' => 'steammsg.steamd', 'interface' => 'ISteamSerializableMessage'],
		]);
	}

	public function generateProtobufs()
	{
		$this->_protobufs->generateProtobufs();
	}

	public function generateEnums()
	{
		$this->_enums->generateEnums();
	}

	public function generateSteamLanguages()
	{
		$this->_steamLanguages->generateSteamLanguages();
	}

	public function generateSteamServers()
	{
		$this->_steamServers->generateSteamServers();
	}

	public function generateAllResources()
	{
		$ignore = ['__construct', 'generateProtobufs', 'generateAllResources', 'generateEnums', 'generateSteamLanguages', 'generateSteamServers'];
		foreach (get_class_methods($this) as $method) {
			if (!in_array($method, $ignore)) {
				$this->$method();
			}
		}

		$this->generateProtobufs();
		$this->generateEnums();
		$this->generateSteamLanguages();
		$this->generateSteamServers();
	}
}