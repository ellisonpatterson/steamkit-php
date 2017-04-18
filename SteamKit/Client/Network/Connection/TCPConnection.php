<?php

namespace SteamKit\Client\Network\Connection;

use SteamKit\Client\Network\Connection;

use PhpBinaryReader\BinaryReader;
use Google\FlatBuffers\ByteBuffer;

class TCPConnection extends Connection
{
	public function send($data)
	{
		
	}

	protected function _onReceive($cli, $data)
	{
		$binaryReader = new BinaryReader($data);

		while (true) {
			if (!$cli->isConnected()) {
				break;
			}

			$canNotRead = $binaryReader->isEof();
			if ($canNotRead) {
				continue;
			}

			$packetLen = $binaryReader->readUInt32();
			$packetMagic = $binaryReader->readUInt32();

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

			$this->getPacketMsg($packData);
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