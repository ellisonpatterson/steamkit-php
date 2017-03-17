<?php

use SteamKit\SteamKit;
use SteamKit\Client\Client;

include_once(__DIR__ .  '/vendor/autoload.php');

$steamKit = new SteamKit();

$steamClient = new Client();
$steamClient->connect();