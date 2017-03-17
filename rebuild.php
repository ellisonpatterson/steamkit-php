<?php

use SteamKit\SteamKit;
use SteamKit\Generate\Builder;

include_once(__DIR__ .  '/vendor/autoload.php');

$steamKit = new SteamKit();

$builder = new Builder();
$builder->generateAllResources();
