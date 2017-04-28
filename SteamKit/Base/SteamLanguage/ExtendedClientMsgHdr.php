<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class ExtendedClientMsgHdr implements ISteamSerializableHeader
{
	public $msg = null;
	public $headerSize = null;
	public $headerVersion = null;
	public $targetJobID = null;
	public $sourceJobID = null;
	public $headerCanary = null;
	public $steamID = null;
	public $sessionID = null;
	public function getMsg()
	{
		return $this->msg;
	}

	public function setMsg($value)
	{
		$this->msg = $value;
	}

	public function getHeaderSize()
	{
		return $this->headerSize;
	}

	public function setHeaderSize($value)
	{
		$this->headerSize = $value;
	}

	public function getHeaderVersion()
	{
		return $this->headerVersion;
	}

	public function setHeaderVersion($value)
	{
		$this->headerVersion = $value;
	}

	public function getTargetJobID()
	{
		return $this->targetJobID;
	}

	public function setTargetJobID($value)
	{
		$this->targetJobID = $value;
	}

	public function getSourceJobID()
	{
		return $this->sourceJobID;
	}

	public function setSourceJobID($value)
	{
		$this->sourceJobID = $value;
	}

	public function getHeaderCanary()
	{
		return $this->headerCanary;
	}

	public function setHeaderCanary($value)
	{
		$this->headerCanary = $value;
	}

	public function getSteamID()
	{
		return new \SteamID($this->steamID);
	}

	public function setSteamID()
	{
		$steamID = new \SteamID($value);
		$this->steamID = $steamID->ConvertToUInt64();
	}

	public function getSessionID()
	{
		return $this->sessionID;
	}

	public function setSessionID($value)
	{
		$this->sessionID = $value;
	}

	public function setValues(array $values = [])
	{
		foreach ($values as $name => $value) {
			if (isset($this->$name)) {
				$this->$name = $value;
			}
		}
	}

	public function setEMsg(int $emsg)
	{
		$this->esmg = $emsg;
	}

	public function __construct(array $values = [])
	{
		$this->msg = \SteamKit\Base\Enums\EMsg::Invalid;
		$this->headerSize = 36;
		$this->headerVersion = 2;
		$this->targetJobID = 1.844674407371E+19;
		$this->sourceJobID = 1.844674407371E+19;
		$this->headerCanary = 239;
		$this->steamID = 0;
		$this->sessionID = 0;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeInt($this->msg);
		$bw->writeByte($this->headerSize);
		$bw->writeUShort($this->headerVersion);
		$bw->writeULong($this->targetJobID);
		$bw->writeULong($this->sourceJobID);
		$bw->writeByte($this->headerCanary);
		$bw->writeULong($this->steamID);
		$bw->writeInt($this->sessionID);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->msg = $results['msg'] = $br->readInt();
		$this->headerSize = $results['headerSize'] = $br->readByte();
		$this->headerVersion = $results['headerVersion'] = $br->readUShort();
		$this->targetJobID = $results['targetJobID'] = $br->readULong();
		$this->sourceJobID = $results['sourceJobID'] = $br->readULong();
		$this->headerCanary = $results['headerCanary'] = $br->readByte();
		$this->steamID = $results['steamID'] = $br->readULong();
		$this->sessionID = $results['sessionID'] = $br->readInt();

		return $results;
	}
}

?>