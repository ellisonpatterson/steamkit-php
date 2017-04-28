<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientSetIgnoreFriendResponse implements ISteamSerializableMessage
{
	public $friendId = null;
	public $result = null;
	public $emsg = null;

	public function getFriendId()
	{
		return new \SteamID($this->steamID);
	}

	public function setFriendId()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getResult()
	{
		return $this->result;
	}

	public function setResult($value)
	{
		$this->result = $value;
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
		$this->friendId = 0;
		$this->result = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientSetIgnoreFriendResponse;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->friendId);
		$bw->writeInt($this->result);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->friendId = $results['friendId'] = $br->readULong();
		$this->result = $results['result'] = $br->readInt();

		return $results;
	}
}

?>