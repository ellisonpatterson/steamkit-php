<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgChannelEncryptRequest implements ISteamSerializableMessage
{
	const PROTOCOL_VERSION = 1;

	public $protocolVersion = null;
	public $universe = null;
	public $emsg = null;

	public function getProtocolVersion()
	{
		return $this->protocolVersion;
	}

	public function setProtocolVersion($value)
	{
		$this->protocolVersion = $value;
	}

	public function getUniverse()
	{
		return $this->universe;
	}

	public function setUniverse($value)
	{
		$this->universe = $value;
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
		$this->protocolVersion = self::PROTOCOL_VERSION;
		$this->universe = \SteamKit\Base\Enums\EUniverse::Invalid;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ChannelEncryptRequest;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeUInt($this->protocolVersion);
		$bw->writeInt($this->universe);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->protocolVersion = $results['protocolVersion'] = $br->readUInt();
		$this->universe = $results['universe'] = $br->readInt();

		return $results;
	}
}

?>