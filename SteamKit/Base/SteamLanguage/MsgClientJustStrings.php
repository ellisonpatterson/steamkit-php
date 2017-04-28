<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientJustStrings implements ISteamSerializableMessage
{
	public function getEMsg()
	{
		return $this->emsg;
	}

	public function __construct(array $values = [])
	{
		$this->emsg = \SteamKit\Base\Enums\EMsg::Invalid;
		$this->setValues($values);
	}

}

?>