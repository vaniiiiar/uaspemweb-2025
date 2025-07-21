<?php

namespace App\Helper;

use Illuminate\Support\Facades\Crypt;
use PhpParser\Node\Stmt\TryCatch;

class EncryptionHelper
{
    public static function encrypt($data)
    {
        $key = env('API_KEY', 'defaultkey');
        return Crypt::encryptString($data, false);
    }

    public static function decrypt($encryptedData)
    {
        try {
            return Crypt::decryptString($encryptedData);
        } catch (\Exception $e) {
            return 'Decription Failed: ' . $e->getMessage();
        }
    }
}
