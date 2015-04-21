<?php

class DbPdo
{

    protected $dbh;

    public function __construct()
    {
        $cfg = include __DIR__ . '/../config/db.php';
        $dsn = 'mysql:dbname=' . $cfg['dbname'] . ';host=' . $cfg['host'];
        $this->$dbh = new PDO($dsn, $cfg['user'], $cfg['passw']);
    }

    public function findAll($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }


}