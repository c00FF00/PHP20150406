<?php

require __DIR__ . '/../classes/Db.php';

abstract class Model
{

    protected static $table;

    public static function getTable()
    {
        return static::$table;
    }

    public static function findAll($ext = null)
    {
        $class = static::class;
        $sql = 'SELECT * FROM ' . static::getTable() . ' ' . $ext;
        $db = new Db();
        return $db->findAll($class, $sql);
    }

    public static function findOne($id)
    {
        $class = static::class;
        $sql = 'SELECT * FROM ' . static::getTable() . ' WHERE id=:id ' ;
        $db = new Db();
        return $db->findOne($class, $sql, [':id' => $id]);
    }

    public static function delete($id)
    {
        $sql = "DELETE FROM " . static::getTable() . " WHERE id=:id";
        $db = new Db();
        $db->dbExec($sql, [':id' => $id]);
    }

    public function insert()
    {
        $sql = "INSERT INTO " . static::getTable() . " ( author, subject, bodynews ) VALUES ( :author, :subject, :bodynews )";
        $db = new Db();
        $this->id = $db->dbExecRet($sql, [':author' => $this->author, ':subject' => $this->subject, ':bodynews' => $this->bodynews]);
    }

    public function update()
    {
        $sql = "UPDATE " . static::getTable() . " SET author=:author, subject=:subject, bodynews=:bodynews WHERE id=:id";
        $db = new Db();
        $db->dbExec($sql, [':id' => $this->id, ':author' => $this->author, ':subject' => $this->subject, ':bodynews' => $this->bodynews]);
    }

    public function save()
    {
        if (isset($this->id)) {
            $this->update();
        } else {
            $this->insert();
        }
    }
}