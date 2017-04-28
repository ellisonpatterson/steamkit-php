<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientLogOnResponse implements ISteamSerializableMessage
{
	public $result = null;
	public $outOfGameHeartbeatRateSec = null;
	public $inGameHeartbeatRateSec = null;
	public $clientSuppliedSteamId = null;
	public $ipPublic = null;
	public $serverRealTime = null;
	public $emsg = null;

	public function getResult()
	{
		return $this->result;
	}

	public function setResult($value)
	{
		$this->result = $value;
	}

	public function getOutOfGameHeartbeatRateSec()
	{
		return $this->outOfGameHeartbeatRateSec;
	}

	public function setOutOfGameHeartbeatRateSec($value)
	{
		$this->outOfGameHeartbeatRateSec = $value;
	}

	public function getInGameHeartbeatRateSec()
	{
		return $this->inGameHeartbeatRateSec;
	}

	public function setInGameHeartbeatRateSec($value)
	{
		$this->inGameHeartbeatRateSec = $value;
	}

	public function getClientSuppliedSteamId()
	{
		return new \SteamID($this->steamID);
	}

	public function setClientSuppliedSteamId()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getIpPublic()
	{
		return $this->ipPublic;
	}

	public function setIpPublic($value)
	{
		$this->ipPublic = $value;
	}

	public function getServerRealTime()
	{
		return $this->serverRealTime;
	}

	public function setServerRealTime($value)
	{
		$this->serverRealTime = $value;
	}

	public function setValues(array $values = [])
	{
		foreach ($values as $name => $value) {
			if (isset($this->$name)) {
				$this->$name = $value;
			}
		}
	}

	public function getEMsg()
	{
		return $this->emsg;
	}

	public function __construct(array $values = [])
	{
		$this->result = 0;
		$this->outOfGameHeartbeatRateSec = 0;
		$this->inGameHeartbeatRateSec = 0;
		$this->clientSuppliedSteamId = 0;
		$this->ipPublic = 0;
		$this->serverRealTime = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientLogOnResponse;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeInt($this->result);
		$bw->writeInt($this->outOfGameHeartbeatRateSec);
		$bw->writeInt($this->inGameHeartbeatRateSec);
		$bw->writeULong($this->clientSuppliedSteamId);
		$bw->writeUInt($this->ipPublic);
		$bw->writeUInt($this->serverRealTime);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->result = $results['result'] = $br->readInt();
		$this->outOfGameHeartbeatRateSec = $results['outOfGameHeartbeatRateSec'] = $br->readInt();
		$this->inGameHeartbeatRateSec = $results['inGameHeartbeatRateSec'] = $br->readInt();
		$this->clientSuppliedSteamId = $results['clientSuppliedSteamId'] = $br->readULong();
		$this->ipPublic = $results['ipPublic'] = $br->readUInt();
		$this->serverRealTime = $results['serverRealTime'] = $br->readUInt();

		return $results;
	}
}

?>