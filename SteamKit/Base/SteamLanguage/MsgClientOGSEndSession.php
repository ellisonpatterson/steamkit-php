<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientOGSEndSession implements ISteamSerializableMessage
{
	public $sessionId = null;
	public $timeEnded = null;
	public $reasonCode = null;
	public $countAttributes = null;
	public $emsg = null;

	public function getSessionId()
	{
		return $this->sessionId;
	}

	public function setSessionId($value)
	{
		$this->sessionId = $value;
	}

	public function getTimeEnded()
	{
		return $this->timeEnded;
	}

	public function setTimeEnded($value)
	{
		$this->timeEnded = $value;
	}

	public function getReasonCode()
	{
		return $this->reasonCode;
	}

	public function setReasonCode($value)
	{
		$this->reasonCode = $value;
	}

	public function getCountAttributes()
	{
		return $this->countAttributes;
	}

	public function setCountAttributes($value)
	{
		$this->countAttributes = $value;
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
		$this->sessionId = 0;
		$this->timeEnded = 0;
		$this->reasonCode = 0;
		$this->countAttributes = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientOGSEndSession;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->sessionId);
		$bw->writeUInt($this->timeEnded);
		$bw->writeInt($this->reasonCode);
		$bw->writeInt($this->countAttributes);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->sessionId = $results['sessionId'] = $br->readULong();
		$this->timeEnded = $results['timeEnded'] = $br->readUInt();
		$this->reasonCode = $results['reasonCode'] = $br->readInt();
		$this->countAttributes = $results['countAttributes'] = $br->readInt();

		return $results;
	}
}

?>