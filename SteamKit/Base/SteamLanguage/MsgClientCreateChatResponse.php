<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientCreateChatResponse implements ISteamSerializableMessage
{
	public $result = null;
	public $steamIdChat = null;
	public $chatRoomType = null;
	public $steamIdFriendChat = null;
	public $emsg = null;

	public function getResult()
	{
		return $this->result;
	}

	public function setResult($value)
	{
		$this->result = $value;
	}

	public function getSteamIdChat()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamIdChat()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getChatRoomType()
	{
		return $this->chatRoomType;
	}

	public function setChatRoomType($value)
	{
		$this->chatRoomType = $value;
	}

	public function getSteamIdFriendChat()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamIdFriendChat()
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
		$this->result = 0;
		$this->steamIdChat = 0;
		$this->chatRoomType = 0;
		$this->steamIdFriendChat = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientCreateChatResponse;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeInt($this->result);
		$bw->writeULong($this->steamIdChat);
		$bw->writeInt($this->chatRoomType);
		$bw->writeULong($this->steamIdFriendChat);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->result = $results['result'] = $br->readInt();
		$this->steamIdChat = $results['steamIdChat'] = $br->readULong();
		$this->chatRoomType = $results['chatRoomType'] = $br->readInt();
		$this->steamIdFriendChat = $results['steamIdFriendChat'] = $br->readULong();

		return $results;
	}
}

?>