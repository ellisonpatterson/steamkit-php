<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientRequestedClientStats implements ISteamSerializableMessage
{
	public $countStats = null;
	public $emsg = null;

	public function getCountStats()
	{
		return $this->countStats;
	}

	public function setCountStats($value)
	{
		$this->countStats = $value;
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
		$this->countStats = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientRequestedClientStats;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeInt($this->countStats);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->countStats = $results['countStats'] = $br->readInt();

		return $results;
	}
}

?>