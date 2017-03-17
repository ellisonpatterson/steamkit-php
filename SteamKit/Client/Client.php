<?php

namespace SteamKit\Client;

use SteamKit\Client\Network\Connection;

class Client
{
	protected $_connection;

	public function __construct()
	{
		$server = \SteamKit\Client\Network\Servers::getRandomServer();
		$this->_connection = new Connection($server);
	}

	public function connect()
	{

	}

	public function disconnect()
	{
	
	}
}