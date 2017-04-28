<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientChatMemberInfo implements ISteamSerializableMessage
{
	public $steamIdChat = null;
	public $type = null;
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

	public function getType()
	{
		return $this->type;
	}

	public function setType($value)
	{
		$this->type = $value;
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
		$this->type = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientChatMemberInfo;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->steamIdChat);
		$bw->writeInt($this->type);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->steamIdChat = $results['steamIdChat'] = $br->readULong();
		$this->type = $results['type'] = $br->readInt();

		return $results;
	}
}

?>