<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgGSGetReputationResponse implements ISteamSerializableMessage
{
	public $result = null;
	public $reputationScore = null;
	public $bannedIp = null;
	public $bannedPort = null;
	public $bannedGameId = null;
	public $timeBanExpires = null;
	public $emsg = null;

	public function getResult()
	{
		return $this->result;
	}

	public function setResult($value)
	{
		$this->result = $value;
	}

	public function getReputationScore()
	{
		return $this->reputationScore;
	}

	public function setReputationScore($value)
	{
		$this->reputationScore = $value;
	}

	public function getBannedIp()
	{
		return $this->bannedIp;
	}

	public function setBannedIp($value)
	{
		$this->bannedIp = $value;
	}

	public function getBannedPort()
	{
		return $this->bannedPort;
	}

	public function setBannedPort($value)
	{
		$this->bannedPort = $value;
	}

	public function getBannedGameId()
	{
		return $this->bannedGameId;
	}

	public function setBannedGameId($value)
	{
		$this->bannedGameId = $value;
	}

	public function getTimeBanExpires()
	{
		return $this->timeBanExpires;
	}

	public function setTimeBanExpires($value)
	{
		$this->timeBanExpires = $value;
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
		$this->reputationScore = 0;
		$this->bannedIp = 0;
		$this->bannedPort = 0;
		$this->bannedGameId = 0;
		$this->timeBanExpires = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::GSGetReputationResponse;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeInt($this->result);
		$bw->writeUInt($this->reputationScore);
		$bw->writeUInt($this->bannedIp);
		$bw->writeUShort($this->bannedPort);
		$bw->writeULong($this->bannedGameId);
		$bw->writeUInt($this->timeBanExpires);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->result = $results['result'] = $br->readInt();
		$this->reputationScore = $results['reputationScore'] = $br->readUInt();
		$this->bannedIp = $results['bannedIp'] = $br->readUInt();
		$this->bannedPort = $results['bannedPort'] = $br->readUShort();
		$this->bannedGameId = $results['bannedGameId'] = $br->readULong();
		$this->timeBanExpires = $results['timeBanExpires'] = $br->readUInt();

		return $results;
	}
}

?>