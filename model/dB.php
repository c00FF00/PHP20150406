<?php

session_start(); session_unset();


class dBaseSql {

    public $author;
    public $subject;
    public $bodynews;
    public $id;
    public $table;
//    public $query;
    public $db;
    public $item;

    public function dbSelectQuery($query)
    {
        $this->query = $query;
        $resquery = mysql_query($query);
        $ret = [];
        while (false !== ($row = mysql_fetch_array($resquery))) {
            $ret[] = $row;
        }
        return $ret;
    }




    public function dbDeleteRecord($db, $from, $where, $item) {
        $this->from = $from;
        $this->where = $where;
        $this->item = $item;
        $this->db = $db;

        $del = "DELETE FROM " . $db . "." . $from . " WHERE " . $from .  "." .$where . " = '" . $item . "'" ;
        mysql_query($del);
    }

    public function __construct($dbHost, $dbName, $dbLogin, $dbPassw) {
        $this->dbHost = $dbHost;
        $this->dbName = $dbName;
        $this->dbLogin = $dbLogin;
        $this->dbPassw = $dbPassw;
        mysql_connect($dbHost, $dbLogin, $dbPassw);
        mysql_select_db($dbName);
    }

}

$dda  =  new dBaseSql('localhost', 'news', 'root', '123456');
$dda->dbDeleteRecord('news', 'main', 'id', '41');
$r = $dda->dbSelectQuery('SELECT * FROM main');
var_dump($r);
?>