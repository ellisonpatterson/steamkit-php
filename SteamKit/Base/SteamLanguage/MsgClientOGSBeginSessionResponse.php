<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientOGSBeginSessionResponse implements ISteamSerializableMessage
{
	public $result = null;
	public $sessionId = null;
	public $emsg = null;

	public function getResult()
	{
		return $this->result;
	}

	public function setResult($value)
	{
		$this->result = $value;
	}

	public function getSessionId()
	{
		return $this->sessionId;
	}

	public function setSessionId($value)
	{
		$this->sessionId = $value;
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
		$this->sessionId = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientOGSBeginSessionResponse;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeInt($this->result);
		$bw->writeULong($this->sessionId);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->result = $results['result'] = $br->readInt();
		$this->sessionId = $results['sessionId'] = $br->readULong();

		return $results;
	}
}

?>