<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgGSPerformHardwareSurvey implements ISteamSerializableMessage
{
	public $flags = null;
	public $emsg = null;

	public function getFlags()
	{
		return $this->flags;
	}

	public function setFlags($value)
	{
		$this->flags = $value;
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
		$this->flags = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::GSPerformHardwareSurvey;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeUInt($this->flags);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->flags = $results['flags'] = $br->readUInt();

		return $results;
	}
}

?>