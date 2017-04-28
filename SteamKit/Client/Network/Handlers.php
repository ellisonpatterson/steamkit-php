<?php

namespace SteamKit\Client\Network;

class Handlers
{
	protected static $_handlers;

	public static function getHandlerByEMsg($emsg, $data)
	{
		$emsg = \SteamKit\Base\Enums\EMsg::getByValue($emsg);
		return self::getHandlerFromCache($emsg, $data);
	}

	public static function getHandlerFromCache($handler, $data, $directory = 'Handlers')
	{
		if (empty($handler)) {
			echo "No handler was specified!\n";
			return false;
		}

		if (!isset(self::$_handlers[$handler]) || self::$_handlers[$handler] === null) {
			$class = '\\' . __NAMESPACE__ . '\\' . $directory . '\\' . $handler;
			self::$_handlers[$handler] = new $class();
		}

		return self::$_handlers[$handler]->process($data);
	}
}