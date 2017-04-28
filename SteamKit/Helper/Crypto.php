<?php

namespace SteamKit\Helper;

use phpseclib\Crypt\Base;
use phpseclib\Crypt\AES;
use phpseclib\Crypt\RSA;

use SteamKit\Helper\FileManager;

class Crypto
{
	public static function generateSessionKey()
	{
		$rsa = new RSA();
		$rsa->loadKey(FileManager::readFileData('Resources/Crypto/system.pem'));

		$sessionKey = openssl_random_pseudo_bytes(32);
		$cryptedSessionKey = $rsa->encrypt($sessionKey);

		return [
			'plain' => $sessionKey,
			'encrypted' => $cryptedSessionKey
		];
	}

	public static function symmetricEncrypt($data, $sessionKey)
	{
		$iv = openssl_random_pseudo_bytes(16);

		$aesIv = new AES(Base::MODE_ECB);
		$aesIv->setPreferredEngine(Base::ENGINE_OPENSSL);
		$aesIv->setKey($sessionKey);
		$aesIv->disablePadding();

		$finalIv = $aesIv->encrypt($iv);

		$aesData = new AES(Base::MODE_CBC);
		$aesData->setPreferredEngine(Base::ENGINE_OPENSSL);
		$aesData->setKey($sessionKey);
		$aesData->setIV($iv);

		$finalData = $aesData->encrypt($data);

		return $finalIv . $finalData;
	}

	public static function symmetricDecrypt($data, $sessionKey)
	{
		$cryptedIv = substr($data, 0, 16);
		$cipherText = substr($data, 16, strlen($data));

		$aesIv = new AES(Base::MODE_ECB);
		$aesIv->setPreferredEngine(Base::ENGINE_OPENSSL);
		$aesIv->setKey($sessionKey);
		$aesIv->disablePadding();

		$iv = $aesIv->decrypt($cryptedIv);

		$aesData = new AES(Base::MODE_CBC);
		$aesData->setPreferredEngine(Base::ENGINE_OPENSSL);
		$aesData->setKey($sessionKey);
		$aesData->setIV($iv);
		$decrypted = $aesData->decrypt($cipherText);

		return $decrypted;
	}
}