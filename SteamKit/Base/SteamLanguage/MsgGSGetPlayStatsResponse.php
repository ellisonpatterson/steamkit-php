<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgGSGetPlayStatsResponse implements ISteamSerializableMessage
{
	public $result = null;
	public $rank = null;
	public $lifetimeConnects = null;
	public $lifetimeMinutesPlayed = null;
	public $emsg = null;

	public function getResult()
	{
		return $this->result;
	}

	public function setResult($value)
	{
		$this->result = $value;
	}

	public function getRank()
	{
		return $this->rank;
	}

	public function setRank($value)
	{
		$this->rank = $value;
	}

	public function getLifetimeConnects()
	{
		return $this->lifetimeConnects;
	}

	public function setLifetimeConnects($value)
	{
		$this->lifetimeConnects = $value;
	}

	public function getLifetimeMinutesPlayed()
	{
		return $this->lifetimeMinutesPlayed;
	}

	public function setLifetimeMinutesPlayed($value)
	{
		$this->lifetimeMinutesPlayed = $value;
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
		$this->rank = 0;
		$this->lifetimeConnects = 0;
		$this->lifetimeMinutesPlayed = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::GSGetPlayStatsResponse;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeInt($this->result);
		$bw->writeInt($this->rank);
		$bw->writeUInt($this->lifetimeConnects);
		$bw->writeUInt($this->lifetimeMinutesPlayed);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->result = $results['result'] = $br->readInt();
		$this->rank = $results['rank'] = $br->readInt();
		$this->lifetimeConnects = $results['lifetimeConnects'] = $br->readUInt();
		$this->lifetimeMinutesPlayed = $results['lifetimeMinutesPlayed'] = $br->readUInt();

		return $results;
	}
}

?>