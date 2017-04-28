<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientChatAction implements ISteamSerializableMessage
{
	public $steamIdChat = null;
	public $steamIdUserToActOn = null;
	public $chatAction = null;
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

	public function getSteamIdUserToActOn()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamIdUserToActOn()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getChatAction()
	{
		return $this->chatAction;
	}

	public function setChatAction($value)
	{
		$this->chatAction = $value;
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
		$this->steamIdUserToActOn = 0;
		$this->chatAction = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientChatAction;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->steamIdChat);
		$bw->writeULong($this->steamIdUserToActOn);
		$bw->writeInt($this->chatAction);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->steamIdChat = $results['steamIdChat'] = $br->readULong();
		$this->steamIdUserToActOn = $results['steamIdUserToActOn'] = $br->readULong();
		$this->chatAction = $results['chatAction'] = $br->readInt();

		return $results;
	}
}

?>