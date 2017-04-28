<?php

namespace SteamKit\Base\Enums;

class EAppInfoSection
{
	const Unknown = 0;
	const All = 1;
	const First = 2;
	const Common = 2;
	const Extended = 3;
	const Config = 4;
	const Stats = 5;
	const Install = 6;
	const Depots = 7;
	const VAC = 8; // obsolete
	const VAC_UNUSED = 8; // obsolete
	const DRM = 9; // obsolete
	const DRM_UNUSED = 9; // obsolete
	const UFS = 10;
	const OGG = 11;
	const Items = 12; // obsolete
	const ItemsUNUSED = 12; // obsolete
	const Policies = 13;
	const SysReqs = 14;
	const Community = 15;
	const Store = 16;
	const Max = 17;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EAppInfoSection');
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