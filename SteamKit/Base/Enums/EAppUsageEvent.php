<?php

namespace SteamKit\Base\Enums;

class EAppUsageEvent
{
	const GameLaunch = 1;
	const GameLaunchTrial = 2;
	const Media = 3;
	const PreloadStart = 4;
	const PreloadFinish = 5;
	const MarketingMessageView = 6;
	const InGameAdViewed = 7;
	const GameLaunchFreeWeekend = 8;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EAppUsageEvent');
		return $class->getConstants();
	}

	public static function getByName($name)
	{
		$constants = self::getAllEnums();
		if (array_key_exists($name, $constants)) {
			return $constants[$name];
		}

		return false;
	}

	public static function getByValue($value)
	{
		$constants = self::getAllEnums();
		$key = array_search($value, $constants);
		if ($key !== null || $key !== false) {
			return $key;
		}

		return false;
	}
}
?>