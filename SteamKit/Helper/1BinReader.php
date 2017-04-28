<?php

namespace SteamKit\Helper;

use PhpBinaryReader\BinaryReader;
use PhpBinaryReader\Endian;
use Litipk\BigNumbers\Decimal as Decimal;

class BinReader
{
	protected $_configuration;
	protected $_readContext;
	protected $_binaryReader;
	protected $_stream;

	public function __construct($stream)
	{
		$this->_binaryReader = new BinaryReader($stream, Endian::ENDIAN_LITTLE);
	}

	public function readByte()
	{
		return $this->_binaryReader->readSingle();
	}

	public function readBytes($length)
	{
		return $this->_binaryReader->readBytes($length);
	}

	public function readShort()
	{
		return $this->_binaryReader->readInt16();
	}

	public function readUShort()
	{
		return $this->_binaryReader->readUInt16();
	}

	public function readInt()
	{
		return $this->_binaryReader->readInt32();
	}

	public function readUInt()
	{
		return $this->_binaryReader->readUInt32();
	}

	public function readLong()
	{
		return Decimal::fromString($this->_binaryReader->readInt64());
	}

	public function readULong()
	{
		$long = $this->_binaryReader->readUInt64();
		return Decimal::fromString($this->_binaryReader->readUInt64($long));
	}

	public function readString($length)
	{
		return $this->_binaryReader->readString($length);
	}

	public function isEof()
	{
		return $this->_binaryReader->isEof();
	}
}