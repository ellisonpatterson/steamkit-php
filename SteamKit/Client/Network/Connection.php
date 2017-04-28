<?php

namespace SteamKit\Client\Network;

use SteamKit\Helper\BinReader;

abstract class Connection
{
	protected $_client;
	protected $_sessionKey;
	protected $_server;

	protected $_isConnected = false;

	protected $_events = array(
		'connect' => '_onConnect',
		'receive' => '_onReceive',
		'error' => '_onError',
		'close' => '_onClose'
	);

	const magic = 'VT01';
	const protoMask = 0x80000000;

	public function __construct($server)
	{
		$this->setServer($server);

		$this->_client = new \swoole_client($this->getConnectionType(), SWOOLE_SOCK_ASYNC);

		foreach ($this->_events as $event => $method) {
			$this->_client->on($event, function() use($method) {
				call_user_func_array(array(&$this, $method), func_get_args());
			});
		}
	}

	public function connect()
	{
		$server = $this->getServer();
		$this->_client->connect($server['host'], $server['port'], 0.5);
	}

	public function disconnect()
	{
		$this->_client->close();
	}

	public function reconnect()
	{
		$this->disconnect();
		$this->setServer(\SteamKit\Client\Network\Servers::getRandomServer());
		sleep(1);
		$this->connect();
	}

	public function getPacketMsg($data)
	{
		var_dump($data);
		if (!$data) {
			return $this->reconnect();
		}

		$binaryReader = new BinReader($data);

		$rawEMsg = $binaryReader->readUInt();
		$eMsg = $rawEMsg & ~self::protoMask;

		if ($eMsg == \SteamKit\Base\Enums\EMsg::ChannelEncryptRequest || $eMsg == \SteamKit\Base\Enums\EMsg::ChannelEncryptResult) {
			$header = new \SteamKit\Base\SteamLanguage\MsgHdr();
			$header->decode($data);

			$sourceJobId = $header->getSourceJobID();
			$targetJobId = $header->getTargetJobID();

			var_dump($header);
			echo "\n\n";
		} else if ($rawEMsg & self::protoMask) {
			$header = new \SteamKit\Base\SteamLanguage\MsgHdrProtoBuf();
			$header->decode($data);
		} else {
			$header = new \SteamKit\Base\SteamLanguage\ExtendedClientMsgHdr();
			$header->decode($data);

			$sourceJobId = $header->getSourceJobID();
			$targetJobId = $header->getTargetJobID();
		}

		$response = Handlers::getHandlerByEMsg($eMsg, $data);
		if (!$response) {
			return $this->disconnect();
		}

		return $response;
	}

	abstract public function getMagic();
	abstract public function getConnectionType();

	protected function _onConnect($cli)
	{
		$this->_isConnected = true;

		echo "Connected to Steam server (" . $this->_server['host'] . ":" . $this->_server['port'] . ")\n";
	}

	protected function _onReceive($cli, $data)
	{
		echo "Data received\n";
	}

	protected function _onError($cli)
	{
		echo "Connect failed\n";
	}

	protected function _onClose($cli)
	{
		$this->_isConnected = false;

		echo "Connection close\n";
	}

	public function getSessionKey()
	{
		return $this->_sessionKey;
	}

	public function generateSessionKey()
	{
		if ($this->_sessionKey === null) {
			$this->_sessionKey = \SteamKit\Helper\Crypto::generateSessionKey();
		}

		return $this->_sessionKey;
	}

	public function isConnected()
	{
		return $this->_isConnected;
	}

	public function getServer()
	{
		return $this->_server;
	}

	public function setServer($server)
	{
		if (!is_array($server)) {
			$server = list($host, $port) = explode(':', $server);
		}

		$this->_server = $server;
	}
}