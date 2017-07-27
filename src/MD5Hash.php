<?php

namespace Jiezeal\Hasher;

use Illuminate\Support\Facades\Facade;

class MD5Hash extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'md5hash';
    }
}