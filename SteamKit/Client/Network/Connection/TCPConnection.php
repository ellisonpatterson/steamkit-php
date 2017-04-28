<?php

namespace SteamKit\Client\Network\Connection;

use SteamKit\Client\Network\Connection;
use SteamKit\Helper\BinReader;

class TCPConnection extends Connection
{
	protected function _onReceive($cli, $data)
	{
		while (true) {
			if (empty($data)) {
				continue;
			}

			$binaryReader = new BinReader($data);

			if (!$cli->isConnected()) {
				break;
			}

			$canNotRead = $binaryReader->isEof();
			if ($canNotRead) {
				continue;
			}

			$packetLen = $binaryReader->readUInt();
			$packetMagic = $binaryReader->readUInt();

			if ($packetMagic != $this->getMagic()) {
				echo "Got a packet with invalid magic!\n";
			}

			$packData = $binaryReader->readBytes($packetLen);
			if (strlen($packData) != $packetLen) {
				echo "Connection lost while reading packet payload!\n";
			}

			if ($this->getSessionKey()) {
				$packData = \SteamKit\Helper\Crypto::symmetricDecrypt($packData, $this->getSessionKey()['plain']);
			}

			$packet = $this->getPacketMsg($packData);
			if (empty($packet)) {
				continue;
			}

			$cli->send($packet);
		}
	}

	public function getConnectionType()
	{
		return SWOOLE_SOCK_TCP;
	}

	public function getMagic()
	{
		return 0x31305456;
	}
}