<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class ChallengeData implements ISteamSerializable
{
	const CHALLENGE_MASK = 0xA426DF2B;

	public $challengeValue = null;
	public $serverLoad = null;
	public function getChallengeValue()
	{
		return $this->challengeValue;
	}

	public function setChallengeValue($value)
	{
		$this->challengeValue = $value;
	}

	public function getServerLoad()
	{
		return $this->serverLoad;
	}

	public function setServerLoad($value)
	{
		$this->serverLoad = $value;
	}

	public function setValues(array $values = [])
	{
		foreach ($values as $name => $value) {
			if (isset($this->$name)) {
				$this->$name = $value;
			}
		}
	}
	public function __construct(array $values = [])
	{
		$this->challengeValue = 0;
		$this->serverLoad = 0;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeUInt($this->challengeValue);
		$bw->writeUInt($this->serverLoad);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->challengeValue = $results['challengeValue'] = $br->readUInt();
		$this->serverLoad = $results['serverLoad'] = $br->readUInt();

		return $results;
	}
}

?>