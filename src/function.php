<?php

if (!function_exists('md5hash')) {
    function md5hash()
    {
        $md5hash = app('md5hash');
        return $md5hash;
    }
}