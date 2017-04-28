<?php

namespace SteamKit\Base\Enums;

class EDRMBlobDownloadErrorDetail
{
	const None = 0;
	const DownloadFailed = 1;
	const TargetLocked = 2;
	const OpenZip = 3;
	const ReadZipDirectory = 4;
	const UnexpectedZipEntry = 5;
	const UnzipFullFile = 6;
	const UnknownBlobType = 7;
	const UnzipStrips = 8;
	const UnzipMergeGuid = 9;
	const UnzipSignature = 10;
	const ApplyStrips = 11;
	const ApplyMergeGuid = 12;
	const ApplySignature = 13;
	const AppIdMismatch = 14;
	const AppIdUnexpected = 15;
	const AppliedSignatureCorrupt = 16;
	const ApplyValveSignatureHeader = 17;
	const UnzipValveSignatureHeader = 18;
	const PathManipulationError = 19;
	const TargetLocked_Base = 65536;
	const TargetLocked_Max = 131071;
	const NextBase = 131072;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EDRMBlobDownloadErrorDetail');
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