<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class ConnectData implements ISteamSerializable
{
	const CHALLENGE_MASK = ChallengeData::CHALLENGE_MASK;

	public $challengeValue = null;
	public function getChallengeValue()
	{
		return $this->challengeValue;
	}

	public function setChallengeValue($value)
	{
		$this->challengeValue = $value;
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
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeUInt($this->challengeValue);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->challengeValue = $results['challengeValue'] = $br->readUInt();

		return $results;
	}
}

?>