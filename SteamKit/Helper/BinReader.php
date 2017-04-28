<?php

namespace SteamKit\Helper;

use Protobuf\Configuration;
use Protobuf\Stream;
use Protobuf\Binary\StreamReader;

class BinReader
{
	protected $_readContext;
	protected $_streamReader;
	protected $_stream;

	public function __construct($stream)
	{
		$configuration = new Configuration();
		$this->_readContext = $configuration->createReadContext($stream);
		$this->_streamReader = $this->_readContext->getReader();
		$this->_stream = $this->_readContext->getStream();
	}

	public function getLength()
	{
		return $this->_readContext->getLength();
	}

	public function readByte()
	{
		return $this->_streamReader->readByte($this->_stream);
	}

	public function readBytes($length)
	{
		return $this->_stream->read($length);
	}

	public function readVarInt()
	{
		return $this->_streamReader->readVarint($this->_stream);
	}

	public function readShort()
	{
		return $this->_streamReader->readSFixed32($this->_stream);
	}

	public function readUShort()
	{
		return $this->_streamReader->readFixed32($this->_stream);
	}

	public function readInt()
	{
		return $this->_streamReader->readSFixed32($this->_stream);
	}

	public function readUInt()
	{
		return $this->_streamReader->readFixed32($this->_stream);
	}

	public function readLong()
	{
		return $this->_streamReader->readDouble($this->_stream);
	}

	public function readULong()
	{
		return $this->_streamReader->readDouble($this->_stream);
	}

	public function readFloat()
	{
		return $this->_streamReader->readFloat($this->_stream);
	}

	public function readDouble()
	{
		return $this->_streamReader->readDouble($this->_stream);
	}

	public function readBool()
	{
		return $this->_streamReader->readBool($this->_stream);
	}

	public function readString()
	{
		return $this->_streamReader->readString($this->_stream);
	}

	public function isEof()
	{
		return $this->_stream->eof();
	}
}