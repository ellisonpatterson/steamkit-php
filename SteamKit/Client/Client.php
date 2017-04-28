<?php

namespace SteamKit\Client;

use SteamKit\SteamKit;

class Client
{
	protected $_connectionTypes = [
		'tcp' => 'SteamKit\Client\Network\Connection\TCPConnection',
		'udp' => 'SteamKit\Client\Network\Connection\UDPConnection'
	];

	public function __construct($type = 'tcp')
	{
		if (!array_key_exists($type, $this->_connectionTypes)) {
			echo "Not a valid connection type!\n";
		}

		$connectionTypeClass = $this->_connectionTypes[$type];

		$server = \SteamKit\Client\Network\Servers::getRandomServer();
		SteamKit::set('connection', new $connectionTypeClass($server));
	}

	public function connect()
	{
		SteamKit::get('connection')->connect();
	}

	public function disconnect()
	{
	
	}
}