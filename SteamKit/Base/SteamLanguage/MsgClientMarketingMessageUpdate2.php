<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientMarketingMessageUpdate2 implements ISteamSerializableMessage
{
	public $marketingMessageUpdateTime = null;
	public $count = null;
	public $emsg = null;

	public function getMarketingMessageUpdateTime()
	{
		return $this->marketingMessageUpdateTime;
	}

	public function setMarketingMessageUpdateTime($value)
	{
		$this->marketingMessageUpdateTime = $value;
	}

	public function getCount()
	{
		return $this->count;
	}

	public function setCount($value)
	{
		$this->count = $value;
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
		$this->marketingMessageUpdateTime = 0;
		$this->count = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientMarketingMessageUpdate2;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeUInt($this->marketingMessageUpdateTime);
		$bw->writeUInt($this->count);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->marketingMessageUpdateTime = $results['marketingMessageUpdateTime'] = $br->readUInt();
		$this->count = $results['count'] = $br->readUInt();

		return $results;
	}
}

?>