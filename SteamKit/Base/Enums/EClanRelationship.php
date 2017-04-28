<?php

namespace SteamKit\Base\Enums;

class EClanRelationship
{
	const None = 0;
	const Blocked = 1;
	const Invited = 2;
	const Member = 3;
	const Kicked = 4;
	const KickAcknowledged = 5;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EClanRelationship');
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