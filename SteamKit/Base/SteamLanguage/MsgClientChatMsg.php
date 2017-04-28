<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientChatMsg implements ISteamSerializableMessage
{
	public $steamIdChatter = null;
	public $steamIdChatRoom = null;
	public $chatMsgType = null;
	public $emsg = null;

	public function getSteamIdChatter()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamIdChatter()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getSteamIdChatRoom()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamIdChatRoom()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getChatMsgType()
	{
		return $this->chatMsgType;
	}

	public function setChatMsgType($value)
	{
		$this->chatMsgType = $value;
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
		$this->steamIdChatter = 0;
		$this->steamIdChatRoom = 0;
		$this->chatMsgType = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientChatMsg;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->steamIdChatter);
		$bw->writeULong($this->steamIdChatRoom);
		$bw->writeInt($this->chatMsgType);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->steamIdChatter = $results['steamIdChatter'] = $br->readULong();
		$this->steamIdChatRoom = $results['steamIdChatRoom'] = $br->readULong();
		$this->chatMsgType = $results['chatMsgType'] = $br->readInt();

		return $results;
	}
}

?>