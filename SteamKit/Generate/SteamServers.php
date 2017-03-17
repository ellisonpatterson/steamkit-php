<?php

namespace SteamKit\Generate;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class SteamServers
{
	public function generateSteamServers()
	{
		echo 'Generating Steam Servers...' . "\n";

		$client = new Client();
		$response = $client->get('https://api.steampowered.com/ISteamDirectory/GetCMList/v1/', [
			'query' => [
				'format' => 'json',
				'cellid' => 0
			]
		])->getBody();;

		$contents = json_decode($response);
		if (!$contents || !$contents->response->result) {
			return false;
		}

		\SteamKit\Helper\FileManager::createDirectory(APP_ROOT_FOLDER . 'Base');

		$servers = "<?php\n\nnamespace SteamKit\Base;\n\nclass SteamServers\n{\n\tpublic static function getAllSteamServers()\n\t{\n\t\treturn [\n";
		foreach ($contents->response->serverlist as $server) {
			$servers .= "\t\t\t'" . $server . "',\n";
		}

		$servers .= "\t\t];\n\t}\n}\n?>";

		\SteamKit\Helper\FileManager::writeFileData(APP_ROOT_FOLDER . 'Base/SteamServers.php', $servers);

		echo 'Steam Servers have been generated!' . "\n";
	}
}