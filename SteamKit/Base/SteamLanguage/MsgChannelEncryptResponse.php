<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgChannelEncryptResponse implements ISteamSerializableMessage
{
	public $protocolVersion = null;
	public $keySize = null;
	public $emsg = null;

	public function getProtocolVersion()
	{
		return $this->protocolVersion;
	}

	public function setProtocolVersion($value)
	{
		$this->protocolVersion = $value;
	}

	public function getKeySize()
	{
		return $this->keySize;
	}

	public function setKeySize($value)
	{
		$this->keySize = $value;
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
		$this->protocolVersion = \SteamKit\Base\SteamLanguage\MsgChannelEncryptRequest::PROTOCOL_VERSION;
		$this->keySize = 128;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ChannelEncryptResponse;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeUInt($this->protocolVersion);
		$bw->writeUInt($this->keySize);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->protocolVersion = $results['protocolVersion'] = $br->readUInt();
		$this->keySize = $results['keySize'] = $br->readUInt();

		return $results;
	}
}

?>