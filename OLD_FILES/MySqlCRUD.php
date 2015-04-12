<?php

class MySqlCRUD
{

    public function dbSelectAllRecords($dbTable, $columns, $orderby, $desc, $limit)
    {
        if ($desc) {
            $desc = 'DESC';
        } else {
            $desc = "";
        }
        $query = "SELECT " . $columns . " FROM " . $dbTable . " ORDER BY " . $orderby . " " . $desc . " LIMIT 0, " . $limit;
        echo $query;
        $resquery = mysql_query($query);
        $ret = [];
        while (false !== ($row = mysql_fetch_array($resquery))) {
            $ret[] = $row;
        }
        return $ret;
    }

    public function dbInsertRecords()
    {
        $query = "INSERT INTO news.main (`author`, `subject`, `bodynews`) VALUES ('f', 'g', 'h')";
        mysql_query($query);
    }




//    public function dbDeleteRecord($dbName, $dbTable, $dbWhere, $item) {
//        $del =
//    }

    public function __construct($dbHost, $dbName, $dbLogin, $dbPassw)
    {
        mysql_connect($dbHost, $dbLogin, $dbPassw);
        mysql_select_db($dbName);
    }
}

$dda = new MySqlCRUD('localhost', 'news', 'root', '123456');
$rr = $dda->dbSelectAllRecords('main', 'id, subject', 'DATE', true, '10');
var_dump($rr);

?>