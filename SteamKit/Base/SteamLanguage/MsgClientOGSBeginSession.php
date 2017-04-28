<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientOGSBeginSession implements ISteamSerializableMessage
{
	public $accountType = null;
	public $accountId = null;
	public $appId = null;
	public $timeStarted = null;
	public $emsg = null;

	public function getAccountType()
	{
		return $this->accountType;
	}

	public function setAccountType($value)
	{
		$this->accountType = $value;
	}

	public function getAccountId()
	{
		return new \SteamID($this->steamID);
	}

	public function setAccountId()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getAppId()
	{
		return $this->appId;
	}

	public function setAppId($value)
	{
		$this->appId = $value;
	}

	public function getTimeStarted()
	{
		return $this->timeStarted;
	}

	public function setTimeStarted($value)
	{
		$this->timeStarted = $value;
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
		$this->accountType = 0;
		$this->accountId = 0;
		$this->appId = 0;
		$this->timeStarted = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientOGSBeginSession;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeByte($this->accountType);
		$bw->writeULong($this->accountId);
		$bw->writeUInt($this->appId);
		$bw->writeUInt($this->timeStarted);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->accountType = $results['accountType'] = $br->readByte();
		$this->accountId = $results['accountId'] = $br->readULong();
		$this->appId = $results['appId'] = $br->readUInt();
		$this->timeStarted = $results['timeStarted'] = $br->readUInt();

		return $results;
	}
}

?>