<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientCreateChat implements ISteamSerializableMessage
{
	public $chatRoomType = null;
	public $gameId = null;
	public $steamIdClan = null;
	public $permissionOfficer = null;
	public $permissionMember = null;
	public $permissionAll = null;
	public $membersMax = null;
	public $chatFlags = null;
	public $steamIdFriendChat = null;
	public $steamIdInvited = null;
	public $emsg = null;

	public function getChatRoomType()
	{
		return $this->chatRoomType;
	}

	public function setChatRoomType($value)
	{
		$this->chatRoomType = $value;
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

	public function getPermissionOfficer()
	{
		return $this->permissionOfficer;
	}

	public function setPermissionOfficer($value)
	{
		$this->permissionOfficer = $value;
	}

	public function getPermissionMember()
	{
		return $this->permissionMember;
	}

	public function setPermissionMember($value)
	{
		$this->permissionMember = $value;
	}

	public function getPermissionAll()
	{
		return $this->permissionAll;
	}

	public function setPermissionAll($value)
	{
		$this->permissionAll = $value;
	}

	public function getMembersMax()
	{
		return $this->membersMax;
	}

	public function setMembersMax($value)
	{
		$this->membersMax = $value;
	}

	public function getChatFlags()
	{
		return $this->chatFlags;
	}

	public function setChatFlags($value)
	{
		$this->chatFlags = $value;
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

	public function getSteamIdInvited()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamIdInvited()
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
		$this->chatRoomType = 0;
		$this->gameId = 0;
		$this->steamIdClan = 0;
		$this->permissionOfficer = 0;
		$this->permissionMember = 0;
		$this->permissionAll = 0;
		$this->membersMax = 0;
		$this->chatFlags = 0;
		$this->steamIdFriendChat = 0;
		$this->steamIdInvited = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientCreateChat;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeInt($this->chatRoomType);
		$bw->writeULong($this->gameId);
		$bw->writeULong($this->steamIdClan);
		$bw->writeInt($this->permissionOfficer);
		$bw->writeInt($this->permissionMember);
		$bw->writeInt($this->permissionAll);
		$bw->writeUInt($this->membersMax);
		$bw->writeByte($this->chatFlags);
		$bw->writeULong($this->steamIdFriendChat);
		$bw->writeULong($this->steamIdInvited);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->chatRoomType = $results['chatRoomType'] = $br->readInt();
		$this->gameId = $results['gameId'] = $br->readULong();
		$this->steamIdClan = $results['steamIdClan'] = $br->readULong();
		$this->permissionOfficer = $results['permissionOfficer'] = $br->readInt();
		$this->permissionMember = $results['permissionMember'] = $br->readInt();
		$this->permissionAll = $results['permissionAll'] = $br->readInt();
		$this->membersMax = $results['membersMax'] = $br->readUInt();
		$this->chatFlags = $results['chatFlags'] = $br->readByte();
		$this->steamIdFriendChat = $results['steamIdFriendChat'] = $br->readULong();
		$this->steamIdInvited = $results['steamIdInvited'] = $br->readULong();

		return $results;
	}
}

?>