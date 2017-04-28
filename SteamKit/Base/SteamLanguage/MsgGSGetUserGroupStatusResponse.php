<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgGSGetUserGroupStatusResponse implements ISteamSerializableMessage
{
	public $steamIdUser = null;
	public $steamIdGroup = null;
	public $clanRelationship = null;
	public $clanRank = null;
	public $emsg = null;

	public function getSteamIdUser()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamIdUser()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getSteamIdGroup()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamIdGroup()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getClanRelationship()
	{
		return $this->clanRelationship;
	}

	public function setClanRelationship($value)
	{
		$this->clanRelationship = $value;
	}

	public function getClanRank()
	{
		return $this->clanRank;
	}

	public function setClanRank($value)
	{
		$this->clanRank = $value;
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
		$this->steamIdUser = 0;
		$this->steamIdGroup = 0;
		$this->clanRelationship = 0;
		$this->clanRank = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::GSGetUserGroupStatusResponse;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->steamIdUser);
		$bw->writeULong($this->steamIdGroup);
		$bw->writeInt($this->clanRelationship);
		$bw->writeInt($this->clanRank);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->steamIdUser = $results['steamIdUser'] = $br->readULong();
		$this->steamIdGroup = $results['steamIdGroup'] = $br->readULong();
		$this->clanRelationship = $results['clanRelationship'] = $br->readInt();
		$this->clanRank = $results['clanRank'] = $br->readInt();

		return $results;
	}
}

?>