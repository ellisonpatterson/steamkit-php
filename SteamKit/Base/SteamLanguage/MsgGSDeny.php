<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgGSDeny implements ISteamSerializableMessage
{
	public $steamId = null;
	public $denyReason = null;
	public $emsg = null;

	public function getSteamId()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamId()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getDenyReason()
	{
		return $this->denyReason;
	}

	public function setDenyReason($value)
	{
		$this->denyReason = $value;
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
		$this->steamId = 0;
		$this->denyReason = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::GSDeny;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->steamId);
		$bw->writeInt($this->denyReason);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->steamId = $results['steamId'] = $br->readULong();
		$this->denyReason = $results['denyReason'] = $br->readInt();

		return $results;
	}
}

?>