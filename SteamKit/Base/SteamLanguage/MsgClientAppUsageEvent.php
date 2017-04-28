<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientAppUsageEvent implements ISteamSerializableMessage
{
	public $appUsageEvent = null;
	public $gameID = null;
	public $offline = null;
	public $emsg = null;

	public function getAppUsageEvent()
	{
		return $this->appUsageEvent;
	}

	public function setAppUsageEvent($value)
	{
		$this->appUsageEvent = $value;
	}

	public function getOffline()
	{
		return $this->offline;
	}

	public function setOffline($value)
	{
		$this->offline = $value;
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
		$this->appUsageEvent = 0;
		$this->gameID = 0;
		$this->offline = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientAppUsageEvent;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeInt($this->appUsageEvent);
		$bw->writeULong($this->gameID);
		$bw->writeUShort($this->offline);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->appUsageEvent = $results['appUsageEvent'] = $br->readInt();
		$this->gameID = $results['gameID'] = $br->readULong();
		$this->offline = $results['offline'] = $br->readUShort();

		return $results;
	}
}

?>