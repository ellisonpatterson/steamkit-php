<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientOGSWriteRow implements ISteamSerializableMessage
{
	public $sessionId = null;
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
		$this->countAttributes = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientOGSWriteRow;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->sessionId);
		$bw->writeInt($this->countAttributes);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->sessionId = $results['sessionId'] = $br->readULong();
		$this->countAttributes = $results['countAttributes'] = $br->readInt();

		return $results;
	}
}

?>