<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientGetFriendsWhoPlayGame implements ISteamSerializableMessage
{
	public $gameId = null;
	public $emsg = null;

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
		$this->gameId = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientGetFriendsWhoPlayGame;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->gameId);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->gameId = $results['gameId'] = $br->readULong();

		return $results;
	}
}

?>