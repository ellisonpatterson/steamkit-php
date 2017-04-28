<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgGCHdrProtoBuf implements IGCSerializableHeader
{
	public $msg = null;
	public $headerLength = null;
	public $proto = null;
	public function getMsg()
	{
		return $this->msg;
	}

	public function setMsg($value)
	{
		$this->msg = $value;
	}

	public function getHeaderLength()
	{
		return $this->headerLength;
	}

	public function setHeaderLength($value)
	{
		$this->headerLength = $value;
	}

	public function getProto()
	{
		return $this->proto;
	}

	public function setProto($value)
	{
		$this->proto = $value;
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
		$this->msg = 0;
		$this->headerLength = 0;
		$this->proto = new \SteamKit\Base\SteamMsgBase\CMsgProtoBufHeader();
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeUInt($this->msg);
		$bw->writeInt($this->headerLength);
		$proto = (string) $this->proto;

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->msg = $results['msg'] = $br->readUInt();
		$this->headerLength = $results['headerLength'] = $br->readInt();
		$this->proto = $results['proto'] = $br->readInt();

		return $results;
	}
}

?>