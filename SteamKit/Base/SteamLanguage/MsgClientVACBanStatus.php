<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientVACBanStatus implements ISteamSerializableMessage
{
	public $numBans = null;
	public $emsg = null;

	public function getNumBans()
	{
		return $this->numBans;
	}

	public function setNumBans($value)
	{
		$this->numBans = $value;
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
		$this->numBans = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientVACBanStatus;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeUInt($this->numBans);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->numBans = $results['numBans'] = $br->readUInt();

		return $results;
	}
}

?>