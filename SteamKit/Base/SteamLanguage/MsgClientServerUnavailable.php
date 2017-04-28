<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientServerUnavailable implements ISteamSerializableMessage
{
	public $jobidSent = null;
	public $eMsgSent = null;
	public $eServerTypeUnavailable = null;
	public $emsg = null;

	public function getJobidSent()
	{
		return $this->jobidSent;
	}

	public function setJobidSent($value)
	{
		$this->jobidSent = $value;
	}

	public function getEMsgSent()
	{
		return $this->eMsgSent;
	}

	public function setEMsgSent($value)
	{
		$this->eMsgSent = $value;
	}

	public function getEServerTypeUnavailable()
	{
		return $this->eServerTypeUnavailable;
	}

	public function setEServerTypeUnavailable($value)
	{
		$this->eServerTypeUnavailable = $value;
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
		$this->jobidSent = 0;
		$this->eMsgSent = 0;
		$this->eServerTypeUnavailable = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientServerUnavailable;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->jobidSent);
		$bw->writeUInt($this->eMsgSent);
		$bw->writeInt($this->eServerTypeUnavailable);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->jobidSent = $results['jobidSent'] = $br->readULong();
		$this->eMsgSent = $results['eMsgSent'] = $br->readUInt();
		$this->eServerTypeUnavailable = $results['eServerTypeUnavailable'] = $br->readInt();

		return $results;
	}
}

?>