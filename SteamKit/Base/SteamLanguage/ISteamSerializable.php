<?php

namespace SteamKit\Base\SteamLanguage;

interface ISteamSerializable
{
	public function encode();
	public function decode($stream);
}

?>