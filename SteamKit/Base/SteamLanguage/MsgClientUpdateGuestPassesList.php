<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientUpdateGuestPassesList implements ISteamSerializableMessage
{
	public $result = null;
	public $countGuestPassesToGive = null;
	public $countGuestPassesToRedeem = null;
	public $emsg = null;

	public function getResult()
	{
		return $this->result;
	}

	public function setResult($value)
	{
		$this->result = $value;
	}

	public function getCountGuestPassesToGive()
	{
		return $this->countGuestPassesToGive;
	}

	public function setCountGuestPassesToGive($value)
	{
		$this->countGuestPassesToGive = $value;
	}

	public function getCountGuestPassesToRedeem()
	{
		return $this->countGuestPassesToRedeem;
	}

	public function setCountGuestPassesToRedeem($value)
	{
		$this->countGuestPassesToRedeem = $value;
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
		$this->countGuestPassesToGive = 0;
		$this->countGuestPassesToRedeem = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientUpdateGuestPassesList;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeInt($this->result);
		$bw->writeInt($this->countGuestPassesToGive);
		$bw->writeInt($this->countGuestPassesToRedeem);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->result = $results['result'] = $br->readInt();
		$this->countGuestPassesToGive = $results['countGuestPassesToGive'] = $br->readInt();
		$this->countGuestPassesToRedeem = $results['countGuestPassesToRedeem'] = $br->readInt();

		return $results;
	}
}

?>