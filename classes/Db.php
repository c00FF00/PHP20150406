<?php

class Db

{
    protected $dbh;

    public function __construct()
    {
        $json = file_get_contents(__DIR__ . '/../config/site.json');
        $cfg = json_decode($json);
        $dsn = 'mysql:dbname=' . $cfg->db->dbname . ';host=' . $cfg->db->host;
        $this->dbh = new PDO($dsn, $cfg->db->user, $cfg->db->passw);
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
        $res = $sth->execute($params);
        return $res;
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