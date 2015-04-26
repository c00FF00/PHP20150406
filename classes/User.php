<?php

class User
{

    protected static $table = 'users';

    public $name;
    public $passw;
    public $role;

    public static function getTable()
    {
        return static::$table;
    }

    public function auth()
    {
        $sql = 'SELECT * FROM ' . static::getTable() . ' WHERE user=:user';
        $db = new Db();
        $res = $db->dbExec($sql, [':user' => $this->name]);

        if ($res) {
                } else {
            return false;
        }

    }

    public function authUser()
    {

    }
}
