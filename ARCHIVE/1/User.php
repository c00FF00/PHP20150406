<?php

abstract class User
{
    protected static $table;

    public $login;
    public $passw;
    public $role;

    public static function getTable()
    {
        return static::$table;
    }

    public function check()
    {
        $class = static::class;
        $sql = 'SELECT * FROM ' . static::getTable() . ' WHERE login=:login ';
        $db = new Db();
        $res = $db->findOne($class, $sql, [':login' => $this->login]);



        //var_dump($res[0]);

        if ($res) {
            return $res;
        } else {
            throw new E403Exception();
        }
    }
        public static function auth()
        {

        }





}