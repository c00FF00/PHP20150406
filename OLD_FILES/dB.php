<?php

class dBaseSql {



    public function dbSelectAllRecords($query)
    {
        $resquery = mysql_query($query);
        $ret = [];
        while (false !== ($row = mysql_fetch_array($resquery))) {
            $ret[] = $row;
        }
        return $ret;
    }

    public function dbDeleteRecord($dbName, $dbTable, $dbWhere, $item) {
        $del =
    }

    public function __construct($dbHost, $dbName, $dbLogin, $dbPassw) {
        mysql_connect($dbHost, $dbLogin, $dbPassw);
        mysql_select_db($dbName);
    }
}

$dda  =  new dBaseSql('localhost', 'news', 'root', '123456');
$rr = $dda->dbAnySelectQuery("select * from main");
var_dump($rr);

?>