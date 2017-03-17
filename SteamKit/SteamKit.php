<?php

namespace SteamKit;

class SteamKit
{
	public function __construct()
	{
		$this->_definePaths();
	}

	protected function _definePaths()
	{
		define('ROOT_FOLDER', dirname(__DIR__) . '/');
		define('APP_ROOT_FOLDER', dirname(__FILE__) . '/');
	}
}
