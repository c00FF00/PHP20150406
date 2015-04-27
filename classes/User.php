<?php

class User
{

    protected static $table = 'users';

    public $login;
    public $name;
    public $lastName;
    public $passw;
    public $role;

    public static function getTable()
    {
        return static::$table;
    }

    public static function auth($login, $passw)
    {
        $class = static::class;
        $sql = 'SELECT login, passw, role FROM ' . static::getTable() . ' WHERE login=:login ';
        $db = new Db();
        $res = $db->findOne($class, $sql, [':login' => $login]);
        echo $passw;
        return $res;
        //  throw new E403Exception();
    }

}