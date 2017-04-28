<?php

namespace SteamKit\Base\Enums;

class EChatMemberStateChange
{
	const Entered = 1;
	const Left = 2;
	const Disconnected = 4;
	const Kicked = 8;
	const Banned = 16;
	const VoiceSpeaking = 4096;
	const VoiceDoneSpeaking = 8192;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EChatMemberStateChange');
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