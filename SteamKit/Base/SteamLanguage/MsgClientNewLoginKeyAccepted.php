<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientNewLoginKeyAccepted implements ISteamSerializableMessage
{
	public $uniqueID = null;
	public $emsg = null;

	public function getUniqueID()
	{
		return $this->uniqueID;
	}

	public function setUniqueID($value)
	{
		$this->uniqueID = $value;
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
		$this->uniqueID = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientNewLoginKeyAccepted;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeUInt($this->uniqueID);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->uniqueID = $results['uniqueID'] = $br->readUInt();

		return $results;
	}
}

?>