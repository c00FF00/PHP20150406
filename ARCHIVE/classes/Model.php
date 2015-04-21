<?php

require __DIR__ . '/../classes/Db.php';

abstract class Model
{
    protected static $table;

    public static function getTable()
    {
        return static::$table;
    }

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::getTable();
        $db = new Db();
        return $db->dbSelect($sql);
    }

}