<?php

namespace SteamKit\Helper;

use Protobuf\Configuration;
use Protobuf\Stream;
use Protobuf\Binary\StreamWriter;

class BinWriter
{
	protected $_readContext;
	protected $_streamWriter;

	public function __construct()
	{
		$configuration = new Configuration();
		$this->_writeContext = $configuration->createWriteContext();
		$this->_streamWriter = $this->_writeContext->getWriter();
		$this->_stream = $this->_writeContext->getStream();
	}

	public function writeByte($value)
	{
		return $this->_streamWriter->writeByte($this->_stream, $value);
	}

	public function writeInt($value)
	{
		return $this->_streamWriter->writeSFixed32($this->_stream, $value);
	}

	public function writeUInt($value)
	{
		return $this->_streamWriter->writeFixed32($this->_stream, $value);
	}

	public function writeLong($value)
	{
		return $this->_streamWriter->writeSFixed64($this->_stream, $value);
	}

	public function writeULong($value)
	{
		return $this->_streamWriter->writeFixed64($this->_stream, $value);
	}

	public function writeString($value)
	{
		return $this->_streamWriter->writeString($this->_stream, $value);
	}

	public function __toString()
	{
		return $this->_stream->getContents();
	}
}