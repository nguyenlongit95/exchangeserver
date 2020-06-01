<?php

namespace App\Helpers;

use Config;
use Illuminate\Encryption\Encrypter;

class CryptHelper
{

    public static function encodeCrypt($balance)
    {
        //$balance = (double) $balance;
        $newEncrypter = new Encrypter(base64_decode(Config::get('backend.cryptKey')),
            Config::get('app.cipher'));
        return $newEncrypter->encrypt($balance);
    }

    public static function decodeCrypt($code)
    {
        $newEncrypter = new Encrypter(base64_decode(Config::get('backend.cryptKey')),
            Config::get('app.cipher'));
        return $newEncrypter->decrypt($code);
    }


}
