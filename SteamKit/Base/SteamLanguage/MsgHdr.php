<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgHdr implements ISteamSerializableHeader
{
	public $msg = null;
	public $targetJobID = null;
	public $sourceJobID = null;
	public function getMsg()
	{
		return $this->msg;
	}

	public function setMsg($value)
	{
		$this->msg = $value;
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
		$this->targetJobID = 1.844674407371E+19;
		$this->sourceJobID = 1.844674407371E+19;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeInt($this->msg);
		$bw->writeULong($this->targetJobID);
		$bw->writeULong($this->sourceJobID);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->msg = $results['msg'] = $br->readInt();
		$this->targetJobID = $results['targetJobID'] = $br->readULong();
		$this->sourceJobID = $results['sourceJobID'] = $br->readULong();

		return $results;
	}
}

?>