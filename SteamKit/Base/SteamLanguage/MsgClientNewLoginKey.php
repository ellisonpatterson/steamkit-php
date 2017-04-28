<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientNewLoginKey implements ISteamSerializableMessage
{
	public $uniqueID = null;
	public $loginKey = null;
	public $emsg = null;

	public function getUniqueID()
	{
		return $this->uniqueID;
	}

	public function setUniqueID($value)
	{
		$this->uniqueID = $value;
	}

	public function getLoginKey()
	{
		return $this->loginKey;
	}

	public function setLoginKey($value)
	{
		$this->loginKey = $value;
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
		$this->loginKey = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientNewLoginKey;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeUInt($this->uniqueID);
		$bw->writeByte($this->loginKey);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->uniqueID = $results['uniqueID'] = $br->readUInt();
		$this->loginKey = $results['loginKey'] = $br->readByte();

		return $results;
	}
}

?>