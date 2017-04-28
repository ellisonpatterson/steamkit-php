<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientJoinChat implements ISteamSerializableMessage
{
	public $steamIdChat = null;
	public $emsg = null;

	public function getSteamIdChat()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamIdChat()
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
		$this->steamIdChat = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientJoinChat;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->steamIdChat);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->steamIdChat = $results['steamIdChat'] = $br->readULong();

		return $results;
	}
}

?>