<?php

namespace SteamKit\Client\Network;

use SteamKit\Base\SteamServers;

class Servers
{
	public static function getRandomServer($splitInfo = true)
	{
		$steamServers = new SteamServers();
		$servers = $steamServers->getAllSteamServers();

		$server = $servers[array_rand($servers, 1)];

		if ($splitInfo) {
			list($host, $port) = explode(':', $server);

			return [
				'host' => $host,
				'port' => $port
			];
		}

		return $server;
	}
}