<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientSendGuestPass implements ISteamSerializableMessage
{
	public $giftId = null;
	public $giftType = null;
	public $accountId = null;
	public $emsg = null;

	public function getGiftId()
	{
		return $this->giftId;
	}

	public function setGiftId($value)
	{
		$this->giftId = $value;
	}

	public function getGiftType()
	{
		return $this->giftType;
	}

	public function setGiftType($value)
	{
		$this->giftType = $value;
	}

	public function getAccountId()
	{
		return $this->accountId;
	}

	public function setAccountId($value)
	{
		$this->accountId = $value;
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
		$this->giftId = 0;
		$this->giftType = 0;
		$this->accountId = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientSendGuestPass;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeULong($this->giftId);
		$bw->writeByte($this->giftType);
		$bw->writeUInt($this->accountId);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->giftId = $results['giftId'] = $br->readULong();
		$this->giftType = $results['giftType'] = $br->readByte();
		$this->accountId = $results['accountId'] = $br->readUInt();

		return $results;
	}
}

?>