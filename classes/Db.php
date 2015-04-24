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

    public function dbExecRet($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql, $params);
        $sth->execute($params);
        return $this->dbh->lastInsertId();
    }

    public function dbExec($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql, $params);
        $sth->execute($params);
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

    public function getId()
    {
        return $this->dbh->lastInsertId();
    }
}