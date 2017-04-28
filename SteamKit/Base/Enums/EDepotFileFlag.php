<?php

namespace SteamKit\Base\Enums;

class EDepotFileFlag
{
	const UserConfig = 1;
	const VersionedUserConfig = 2;
	const Encrypted = 4;
	const ReadOnly = 8;
	const Hidden = 16;
	const Executable = 32;
	const Directory = 64;
	const CustomExecutable = 128;
	const InstallScript = 256;
	const Symlink = 512;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EDepotFileFlag');
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