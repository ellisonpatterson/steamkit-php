<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientLoggedOff implements ISteamSerializableMessage
{
	public $result = null;
	public $secMinReconnectHint = null;
	public $secMaxReconnectHint = null;
	public $emsg = null;

	public function getResult()
	{
		return $this->result;
	}

	public function setResult($value)
	{
		$this->result = $value;
	}

	public function getSecMinReconnectHint()
	{
		return $this->secMinReconnectHint;
	}

	public function setSecMinReconnectHint($value)
	{
		$this->secMinReconnectHint = $value;
	}

	public function getSecMaxReconnectHint()
	{
		return $this->secMaxReconnectHint;
	}

	public function setSecMaxReconnectHint($value)
	{
		$this->secMaxReconnectHint = $value;
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
		$this->secMinReconnectHint = 0;
		$this->secMaxReconnectHint = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientLoggedOff;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeInt($this->result);
		$bw->writeInt($this->secMinReconnectHint);
		$bw->writeInt($this->secMaxReconnectHint);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->result = $results['result'] = $br->readInt();
		$this->secMinReconnectHint = $results['secMinReconnectHint'] = $br->readInt();
		$this->secMaxReconnectHint = $results['secMaxReconnectHint'] = $br->readInt();

		return $results;
	}
}

?>