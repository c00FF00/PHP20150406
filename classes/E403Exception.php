<?php


namespace App\Classes;

class E403Exception extends Exception
{
    public static $msg = '403. Доступ запрещен.';

    public static function message()
    {
        return static::$msg;
    }
}