<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class UdpHeader implements ISteamSerializable
{
	const MAGIC = 0x31305356;

	public $magic = null;
	public $payloadSize = null;
	public $packetType = null;
	public $flags = null;
	public $sourceConnID = null;
	public $destConnID = null;
	public $seqThis = null;
	public $seqAck = null;
	public $packetsInMsg = null;
	public $msgStartSeq = null;
	public $msgSize = null;
	public function getMagic()
	{
		return $this->magic;
	}

	public function setMagic($value)
	{
		$this->magic = $value;
	}

	public function getPayloadSize()
	{
		return $this->payloadSize;
	}

	public function setPayloadSize($value)
	{
		$this->payloadSize = $value;
	}

	public function getPacketType()
	{
		return $this->packetType;
	}

	public function setPacketType($value)
	{
		$this->packetType = $value;
	}

	public function getFlags()
	{
		return $this->flags;
	}

	public function setFlags($value)
	{
		$this->flags = $value;
	}

	public function getSourceConnID()
	{
		return $this->sourceConnID;
	}

	public function setSourceConnID($value)
	{
		$this->sourceConnID = $value;
	}

	public function getDestConnID()
	{
		return $this->destConnID;
	}

	public function setDestConnID($value)
	{
		$this->destConnID = $value;
	}

	public function getSeqThis()
	{
		return $this->seqThis;
	}

	public function setSeqThis($value)
	{
		$this->seqThis = $value;
	}

	public function getSeqAck()
	{
		return $this->seqAck;
	}

	public function setSeqAck($value)
	{
		$this->seqAck = $value;
	}

	public function getPacketsInMsg()
	{
		return $this->packetsInMsg;
	}

	public function setPacketsInMsg($value)
	{
		$this->packetsInMsg = $value;
	}

	public function getMsgStartSeq()
	{
		return $this->msgStartSeq;
	}

	public function setMsgStartSeq($value)
	{
		$this->msgStartSeq = $value;
	}

	public function getMsgSize()
	{
		return $this->msgSize;
	}

	public function setMsgSize($value)
	{
		$this->msgSize = $value;
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
		$this->magic = self::MAGIC;
		$this->payloadSize = 0;
		$this->packetType = \SteamKit\Base\Enums\EUdpPacketType::Invalid;
		$this->flags = 0;
		$this->sourceConnID = 512;
		$this->destConnID = 0;
		$this->seqThis = 0;
		$this->seqAck = 0;
		$this->packetsInMsg = 0;
		$this->msgStartSeq = 0;
		$this->msgSize = 0;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeUInt($this->magic);
		$bw->writeUShort($this->payloadSize);
		$bw->writeInt($this->packetType);
		$bw->writeByte($this->flags);
		$bw->writeUInt($this->sourceConnID);
		$bw->writeUInt($this->destConnID);
		$bw->writeUInt($this->seqThis);
		$bw->writeUInt($this->seqAck);
		$bw->writeUInt($this->packetsInMsg);
		$bw->writeUInt($this->msgStartSeq);
		$bw->writeUInt($this->msgSize);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->magic = $results['magic'] = $br->readUInt();
		$this->payloadSize = $results['payloadSize'] = $br->readUShort();
		$this->packetType = $results['packetType'] = $br->readInt();
		$this->flags = $results['flags'] = $br->readByte();
		$this->sourceConnID = $results['sourceConnID'] = $br->readUInt();
		$this->destConnID = $results['destConnID'] = $br->readUInt();
		$this->seqThis = $results['seqThis'] = $br->readUInt();
		$this->seqAck = $results['seqAck'] = $br->readUInt();
		$this->packetsInMsg = $results['packetsInMsg'] = $br->readUInt();
		$this->msgStartSeq = $results['msgStartSeq'] = $br->readUInt();
		$this->msgSize = $results['msgSize'] = $br->readUInt();

		return $results;
	}
}

?>