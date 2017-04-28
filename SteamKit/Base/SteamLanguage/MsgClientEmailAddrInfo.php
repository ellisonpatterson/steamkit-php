<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientEmailAddrInfo implements ISteamSerializableMessage
{
	public $passwordStrength = null;
	public $flagsAccountSecurityPolicy = null;
	public $emsg = null;

	public function getPasswordStrength()
	{
		return $this->passwordStrength;
	}

	public function setPasswordStrength($value)
	{
		$this->passwordStrength = $value;
	}

	public function getFlagsAccountSecurityPolicy()
	{
		return $this->flagsAccountSecurityPolicy;
	}

	public function setFlagsAccountSecurityPolicy($value)
	{
		$this->flagsAccountSecurityPolicy = $value;
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
		$this->passwordStrength = 0;
		$this->flagsAccountSecurityPolicy = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientEmailAddrInfo;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeUInt($this->passwordStrength);
		$bw->writeUInt($this->flagsAccountSecurityPolicy);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->passwordStrength = $results['passwordStrength'] = $br->readUInt();
		$this->flagsAccountSecurityPolicy = $results['flagsAccountSecurityPolicy'] = $br->readUInt();

		return $results;
	}
}

?>