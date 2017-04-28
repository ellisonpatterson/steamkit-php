<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientSetIgnoreFriend implements ISteamSerializableMessage
{
	public $mySteamId = null;
	public $steamIdFriend = null;
	public $ignore = null;
	public $emsg = null;

	public function getMySteamId()
	{
		return new \SteamID($this->steamID);
	}

	public function setMySteamId()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getSteamIdFriend()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamIdFriend()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getIgnore()
	{
		return $this->ignore;
	}

	public function setIgnore($value)
	{
		$this->ignore = $value;
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
		$this->mySteamId = 0;
		$this->steamIdFriend = 0;
		$this->ignore = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientSetIgnoreFriend;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->mySteamId);
		$bw->writeULong($this->steamIdFriend);
		$bw->writeByte($this->ignore);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->mySteamId = $results['mySteamId'] = $br->readULong();
		$this->steamIdFriend = $results['steamIdFriend'] = $br->readULong();
		$this->ignore = $results['ignore'] = $br->readByte();

		return $results;
	}
}

?>