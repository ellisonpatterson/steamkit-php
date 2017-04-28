<?php

namespace SteamKit\Base\Enums;

class EChatEntryType
{
	const Invalid = 0;
	const ChatMsg = 1;
	const Typing = 2;
	const InviteGame = 3;
	const Emote = 4; // obsolete "No longer supported by clients"
	const LobbyGameStart = 5; // obsolete "Listen for LobbyGameCreated_t callback instead"
	const LeftConversation = 6;
	const Entered = 7;
	const WasKicked = 8;
	const WasBanned = 9;
	const Disconnected = 10;
	const HistoricalChat = 11;
	const Reserved1 = 12;
	const Reserved2 = 13;
	const LinkBlocked = 14;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EChatEntryType');
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