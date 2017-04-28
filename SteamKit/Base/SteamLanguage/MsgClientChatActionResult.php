<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientChatActionResult implements ISteamSerializableMessage
{
	public $steamIdChat = null;
	public $steamIdUserActedOn = null;
	public $chatAction = null;
	public $actionResult = null;
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

	public function getSteamIdUserActedOn()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamIdUserActedOn()
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

	public function getActionResult()
	{
		return $this->actionResult;
	}

	public function setActionResult($value)
	{
		$this->actionResult = $value;
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
		$this->steamIdUserActedOn = 0;
		$this->chatAction = 0;
		$this->actionResult = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientChatActionResult;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->steamIdChat);
		$bw->writeULong($this->steamIdUserActedOn);
		$bw->writeInt($this->chatAction);
		$bw->writeInt($this->actionResult);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->steamIdChat = $results['steamIdChat'] = $br->readULong();
		$this->steamIdUserActedOn = $results['steamIdUserActedOn'] = $br->readULong();
		$this->chatAction = $results['chatAction'] = $br->readInt();
		$this->actionResult = $results['actionResult'] = $br->readInt();

		return $results;
	}
}

?>