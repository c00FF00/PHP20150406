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

    public function auth()
   {
//        $sql = 'SELECT login, passw, role FROM ' . static::getTable() . ' WHERE login=:login';
//        $db = new Db();
//        $res = $db->findAll($sql, [':login' => $this->login])[0];
//
//        var_dump($res);


        throw new E403Exception();
    }

}