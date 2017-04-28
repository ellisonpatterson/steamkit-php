<?php

namespace SteamKit\Base\Enums;

class EOSType
{
	const Unknown = "-1";
	const IOSUnknown = "-600";
	const AndroidUnknown = "-500";
	const UMQ = "-400";
	const PS3 = "-300";
	const MacOSUnknown = "-102";
	const MacOS104 = "-101";
	const MacOS105 = "-100";
	const MacOS1058 = "-99";
	const MacOS106 = "-95";
	const MacOS1063 = "-94";
	const MacOS1064_slgu = "-93";
	const MacOS1067 = "-92";
	const MacOS107 = "-90";
	const MacOS108 = "-89";
	const MacOS109 = "-88";
	const MacOS1010 = "-87";
	const MacOS1011 = "-86";
	const MacOS1012 = "-85";
	const MacOSMax = "-1";
	const LinuxUnknown = "-203";
	const Linux22 = "-202";
	const Linux24 = "-201";
	const Linux26 = "-200";
	const Linux32 = "-199";
	const Linux35 = "-198";
	const Linux36 = "-197";
	const Linux310 = "-196";
	const LinuxMax = "-103";
	const WinUnknown = 0;
	const Win311 = 1;
	const Win95 = 2;
	const Win98 = 3;
	const WinME = 4;
	const WinNT = 5;
	const Win200 = 6; // obsolete "renamed to Win2000"
	const Win2000 = 6;
	const WinXP = 7;
	const Win2003 = 8;
	const WinVista = 9;
	const Win7 = 10; // obsolete "renamed to Windows7"
	const Windows7 = 10;
	const Win2008 = 11;
	const Win2012 = 12;
	const Win8 = 13; // obsolete "renamed to Windows8"
	const Windows8 = 13;
	const Win81 = 14; // obsolete "renamed to Windows81"
	const Windows81 = 14;
	const Win2012R2 = 15;
	const Win10 = 16; // obsolete "renamed to Windows10"
	const Windows10 = 16;
	const WinMAX = 15;
	const Max = 26;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EOSType');
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