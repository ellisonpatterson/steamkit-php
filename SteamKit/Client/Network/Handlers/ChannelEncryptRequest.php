<?php

namespace SteamKit\Client\Network\Handlers;

use SteamKit\SteamKit;
use SteamKit\Helper\BinWriter;

class ChannelEncryptRequest
{
	public function process($data)
	{
		$sessionKey = SteamKit::get('connection')->generateSessionKey();
		$keyCrc = $this->_djb_hash($sessionKey['encrypted']);

		$response = new \SteamKit\Base\SteamLanguage\MsgChannelEncryptResponse();
		$encResp = $response->encode();

		$encResp->writeInt($sessionKey['encrypted']);
		$encResp->writeInt($keyCrc);
		$encResp->writeUint(0);

		return (string) $encResp;
	}

	protected function _djb_hash($str) {
		for ($i = 0, $h = 5381, $len = strlen($str); $i < $len; $i++) {
			$h = (($h << 5) + $h + ord($str[$i])) & 0x7FFFFFFF;
		}

		return $h;
	}
}