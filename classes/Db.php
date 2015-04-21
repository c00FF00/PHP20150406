<?php

class Db

{
    protected $dbh;

    public function __construct()
    {
        $cfg = include __DIR__ . '/../config/db.php';
        $dsn = 'mysql:dbname=' . $cfg['dbname'] . ';host=' . $cfg['host'];
        $this->dbh = new PDO($dsn, $cfg['user'], $cfg['passw']);
    }

    public function dbInsertRecord($dbTable, $data)
    {
        $columns = [];
        $values = [];
        foreach ($data as $column => $value) {
            $columns[] = " `" . $column . "`";
            $values[] = " '" . $value . "'";
        }
        $dbColumn = implode(',', $columns);
        $dbValues = implode(',', $values);
        $query = "INSERT INTO `" . $dbTable . "` ( " . $dbColumn . " ) VALUES ( " . $dbValues . " )";
        $result = $this->dbExec($query);
        if (false !== $result) {
            return mysql_insert_id();
        } else {
            return $result;
        }
    }

    public function dbSelectAll($dbTable)
    {
        $query = "SELECT * FROM `" . $dbTable . "`";
        return $this->dbSelect($query);
    }

    public function dbSelectByColumns($dbTable, $data, $extsql = null)
    {
        $columns = implode(", ", $data);
        $query = "SELECT " . $columns . " FROM `" . $dbTable . "` " . $extsql;
        return $this->dbSelect($query);
    }


    public function dbUpdateRecord($dbTable, $data, $id)
    {
        $setdata = [];
        foreach ($data as $column => $value) {
            $value0 = " '" . $value . "'";
            $setdata[] = " " . $column . " =" . $value0;
        }
        $dataset = implode(',', $setdata);
        $query = "UPDATE " . $this->dbname . "." . $dbTable . " SET " . $dataset . " WHERE " . $dbTable . ".id = '" . $id . "'";
        return $this->dbExec($query);

    }

    public function dbDeleteById($dbTable, $id)
    {
        $del = "DELETE FROM " . $this->dbname . "." . $dbTable . " WHERE " . $dbTable . ".id = " . $id;
        return $this->dbExec($del);
    }

    public function dbExec($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql, $params);
        return $sth->execute($params);
    }

    public function dbSelect($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }

    public function findAll($class, $sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        $res = $sth->fetchAll(PDO::FETCH_CLASS, $class);
        return $res;
    }

    public function findOne($class, $sql, $params = [])
    {
        return $this->findAll($class, $sql, $params);
    }

}