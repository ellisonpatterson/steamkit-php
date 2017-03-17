<?php

namespace SteamKit\Client\Network;

use TrafficCophp\ByteBuffer\Buffer;

class Connection
{
	protected $_client;
	protected $_loop;
	protected $_sessionKey;

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

		$this->_client = new \swoole_client(SWOOLE_SOCK_TCP, SWOOLE_SOCK_ASYNC);

		foreach ($this->_events as $event => $method) {
			$this->_client->on($event, function() use($method) {
				call_user_func_array(array(&$this, $method), func_get_args());
			});
		}

		$this->_client->connect($server['host'], $server['port'], 0.5);
	}

	public function send($data)
	{
		
	}

	protected function _onConnect($cli)
	{
		echo "Connected to Steam server ($this->_server)\n";
	}

	protected function _onReceive($cli, $data)
	{
		$buffer = new Buffer($data);

		$rawEMsg = $buffer->readInt32LE(0);
		$eMsg = $rawEMsg & ~self::protoMask;

		$header; $sourceJobID; $targetJobID;
		if ($eMsg == \SteamKit\Base\Enums\EMsg::ChannelEncryptRequest || $eMsg == \SteamKit\Base\Enums\EMsg::ChannelEncryptResult) {
			$header = 
		}

		$decrypted = \SteamKit\Helper\Crypto::symmetricDecrypt($data, $this->getSessionKey()['encrypted']);
		var_dump($decrypted);
	}

	protected function _onError($cli)
	{
		echo "Connect failed\n";
	}

	protected function _onClose($cli)
	{
		echo "Connection close\n";
	}

	public function getSessionKey()
	{
		if ($this->_sessionKey === null) {
			$this->_sessionKey = \SteamKit\Helper\Crypto::generateSessionKey();
		}

		return $this->_sessionKey;
	}

	public function getServer()
	{
		return $server;
	}

	public function setServer($server)
	{
		if (is_array($server)) {
			$server = $server['host'] . ':' . $server['port'];
		}

		$this->_server = $server;
	}
}