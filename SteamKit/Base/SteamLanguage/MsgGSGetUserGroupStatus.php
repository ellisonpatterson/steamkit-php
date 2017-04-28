<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgGSGetUserGroupStatus implements ISteamSerializableMessage
{
	public $steamIdUser = null;
	public $steamIdGroup = null;
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
		$this->emsg = \SteamKit\Base\Enums\EMsg::GSGetUserGroupStatus;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->steamIdUser);
		$bw->writeULong($this->steamIdGroup);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->steamIdUser = $results['steamIdUser'] = $br->readULong();
		$this->steamIdGroup = $results['steamIdGroup'] = $br->readULong();

		return $results;
	}
}

?>