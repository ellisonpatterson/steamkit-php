<?php

namespace SteamKit;

class SteamKit
{
	protected static $_cache;

	public function __construct()
	{
		$this->_definePaths();
	}

	protected function _definePaths()
	{
		define('ROOT_FOLDER', dirname(__DIR__) . '/');
		define('APP_ROOT_FOLDER', dirname(__FILE__) . '/');
	}

	public static function set($name, $data)
	{
		self::$_cache[$name] = $data;
	}

	public static function get($name)
	{
		if (!isset(self::$_cache[$name]) || self::$_cache[$name] === null) {
			return null;
		}

		return self::$_cache[$name];
	}
}
