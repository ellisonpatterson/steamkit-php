<?php

namespace SteamKit\Helper;

class Crypto
{
	public static function generateSessionKey()
	{
		$sessionKey = openssl_random_pseudo_bytes(32);
		openssl_public_encrypt($sessionKey, $cryptedSessionKey, \SteamKit\Helper\FileManager::readFileData('Resources/Crypto/public.pub'));

		return [
			'plain' => $sessionKey,
			'encrypted' => $cryptedSessionKey
		];
	}

    public static function symmetricEncrypt($data, $sessionKey)
    {
        $salt = openssl_random_pseudo_bytes(8);

        $salted = '';
        $dx = '';

        // Salt the key(32) and iv(16) = 48
        while (strlen($salted) < 48) {
            $dx = md5($dx.$sessionKey.$salt, true);
            $salted .= $dx;
        }

        $sessionKey = substr($salted, 0, 32);
        $iv  = substr($salted, 32, 16);

        $encryptedData = openssl_encrypt($data, 'aes-256-cbc', $sessionKey, OPENSSL_RAW_DATA, $iv);

        return base64_encode('Salted__' . $salt . $encryptedData);
    }

    public static function symmetricDecrypt($data, $sessionKey)
    {
        $data = base64_decode($data);
        $salt = substr($data, 8, 8);
        $ciphertext = substr($data, 16);

        $rounds = 3;
        $data00 = $sessionKey.$salt;
        $md5Hash = array();
        $md5Hash[0] = md5($data00, true);
        $result = $md5Hash[0];

        for ($i = 1; $i < $rounds; $i++) {
            $md5Hash[$i] = md5($md5Hash[$i - 1].$data00, true);
            $result .= $md5Hash[$i];
        }

        $key = substr($result, 0, 32);
        $iv  = substr($result, 32, 16);

        return openssl_decrypt($ciphertext, 'aes-256-cbc', $key, true, $iv);
    }

    public function wrapForOpenSSL($data)
    {
        return chunk_split($data, 64);
    }
}