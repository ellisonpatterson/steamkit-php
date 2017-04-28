<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientP2PIntroducerMessage implements ISteamSerializableMessage
{
	public $steamID = null;
	public $routingType = null;
	public $data = null;
	public $dataLen = null;
	public $emsg = null;

	public function getSteamID()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamID()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getRoutingType()
	{
		return $this->routingType;
	}

	public function setRoutingType($value)
	{
		$this->routingType = $value;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setData($value)
	{
		$this->data = $value;
	}

	public function getDataLen()
	{
		return $this->dataLen;
	}

	public function setDataLen($value)
	{
		$this->dataLen = $value;
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
		$this->steamID = 0;
		$this->routingType = 0;
		$this->data = 0;
		$this->dataLen = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientP2PIntroducerMessage;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->steamID);
		$bw->writeInt($this->routingType);
		$bw->writeByte($this->data);
		$bw->writeUInt($this->dataLen);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->steamID = $results['steamID'] = $br->readULong();
		$this->routingType = $results['routingType'] = $br->readInt();
		$this->data = $results['data'] = $br->readByte();
		$this->dataLen = $results['dataLen'] = $br->readUInt();

		return $results;
	}
}

?>