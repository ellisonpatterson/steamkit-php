<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientChatEnter implements ISteamSerializableMessage
{
	public $steamIdChat = null;
	public $steamIdFriend = null;
	public $chatRoomType = null;
	public $steamIdOwner = null;
	public $steamIdClan = null;
	public $chatFlags = null;
	public $enterResponse = null;
	public $numMembers = null;
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

	public function getSteamIdFriend()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamIdFriend()
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

	public function getSteamIdOwner()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamIdOwner()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getSteamIdClan()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamIdClan()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getChatFlags()
	{
		return $this->chatFlags;
	}

	public function setChatFlags($value)
	{
		$this->chatFlags = $value;
	}

	public function getEnterResponse()
	{
		return $this->enterResponse;
	}

	public function setEnterResponse($value)
	{
		$this->enterResponse = $value;
	}

	public function getNumMembers()
	{
		return $this->numMembers;
	}

	public function setNumMembers($value)
	{
		$this->numMembers = $value;
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
		$this->steamIdFriend = 0;
		$this->chatRoomType = 0;
		$this->steamIdOwner = 0;
		$this->steamIdClan = 0;
		$this->chatFlags = 0;
		$this->enterResponse = 0;
		$this->numMembers = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientChatEnter;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->steamIdChat);
		$bw->writeULong($this->steamIdFriend);
		$bw->writeInt($this->chatRoomType);
		$bw->writeULong($this->steamIdOwner);
		$bw->writeULong($this->steamIdClan);
		$bw->writeByte($this->chatFlags);
		$bw->writeInt($this->enterResponse);
		$bw->writeInt($this->numMembers);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->steamIdChat = $results['steamIdChat'] = $br->readULong();
		$this->steamIdFriend = $results['steamIdFriend'] = $br->readULong();
		$this->chatRoomType = $results['chatRoomType'] = $br->readInt();
		$this->steamIdOwner = $results['steamIdOwner'] = $br->readULong();
		$this->steamIdClan = $results['steamIdClan'] = $br->readULong();
		$this->chatFlags = $results['chatFlags'] = $br->readByte();
		$this->enterResponse = $results['enterResponse'] = $br->readInt();
		$this->numMembers = $results['numMembers'] = $br->readInt();

		return $results;
	}
}

?>