<?php

namespace SteamKit/Helper;

class MsgUtil
{
	const ProtoMask = 0x80000000;
	const EMsgMask = ~self::$ProtoMask;

	public static function getMsg(int $msg)
	{
		return \SteamKit\Base\Enums\EMsg::getByValue($msg & self::$EMsgMask);
	}

	public static function getGCMsg(int $msg)
	{
		return $msg & self::$EMsgMask;
	}

	public static function isProtoBuf(int $msg)
	{
		return ($msg & self::$ProtoMask) > 0;
	}

	public static function makeMsg($msg, $protobuf = false)
	{
		if ($protobuf) {
			return \SteamKit\Base\Enums\EMsg::getByValue($msg | self::$ProtoMask);
		}

		return $msg;
	}

	public static function makeGCMsg($msg, $protobuf = false)
	{
		if ($protobuf) {
			return $msg | self::$ProtoMask;
		}

		return $msg;
	}
}