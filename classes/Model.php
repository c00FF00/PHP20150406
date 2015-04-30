<?php

abstract class Model
{

    protected static $table;

    public $id;

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
        $sql = 'SELECT * FROM ' . static::getTable() . ' WHERE id=:id ';
        $db = new Db();
        $res = $db->findOne($class, $sql, [':id' => $id]);
        if ($res) {
            return $res;
        } else {
           throw new E404Exception();
        }
    }

    public static function delete($id)
    {
        $sql = "DELETE FROM " . static::getTable() . " WHERE id=:id";
        $db = new Db();
        $db->dbExec($sql, [':id' => $id]);
    }

    public function insert()
    {
        $properties = get_object_vars($this);
        unset($properties['id']);
        $columns = array_keys($properties);
        $places = [];
        $data = [];
        foreach ($columns as $property) {
            $places[] = ':' . $property;
            $data[':' . $property] = $this->$property;
        }
        $sql = 'INSERT INTO ' . static::getTable() . '(' . implode(', ', $columns) . ') VALUES (' . implode(', ', $places) . ')';
        $db = new Db();
        $db->dbExec($sql, $data);
        return $this->id = $db->getId();
    }

    public function update()
    {
        $properties = get_object_vars($this);
        unset($properties['id']);
        $columns = array_keys($properties);
        $places = [];
        $data = [];
        foreach ($columns as $property) {
            $places[] = ':' . $property;
            $data[':' . $property] = $this->$property;
            $dataset[] = $property . '=:' . $property;
        }
        $data[':id'] = $this->id;
        $sql = 'UPDATE ' . static::getTable() . ' SET ' . implode(', ', $dataset) . ' WHERE id=:id';
        $db = new Db();
        $db->dbExec($sql, $data);
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