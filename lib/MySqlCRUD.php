<?php

class MySqlCRUD
{

//    public function dbSelectRecord($dbTable) {
//
//    }


// <- Работает
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

        $result = mysql_query($query);

        if ($result) {
            return mysql_insert_id();
        } else {
            return $result;
        }
    }


    public function dbSelectAllFromTable($dbTable)
    {
        $query = $query = "SELECT * FROM `" . $dbTable . "`";
        $resquery = mysql_query($query);
        $ret = [];
        while (false !== ($row = mysql_fetch_array($resquery))) {
            $ret[] = $row;

        }
        return $ret;
    }

    public function dbSelectColumnFromTable($dbTable, $data, $extsql = null) {

        $columns = implode(", ",$data);

        $query = $query = "SELECT " . $columns . " FROM `" . $dbTable . "` " . $extsql;

        $resquery = mysql_query($query);
        $ret = [];
        while (false !== ($row = mysql_fetch_array($resquery))) {
            $ret[] = $row;
        }
        return $ret;
    }


    public function dbUpdateRecord( $dbTable, $data, $id)
    {
        $setdata = [];

        foreach ($data as $column => $value) {

            $value0 = " '" . $value . "'";
            $setdata[] = " " . $column . " =" . $value0;
        }

        $dataset = implode(',', $setdata);

        $query = "UPDATE news." . $dbTable . " SET " . $dataset . " WHERE " . $dbTable . ".id = '" . $id . "'";

        $result = mysql_query($query);
        return $result;

    }

    public function dbDeleteById($dbTable, $id)
    {

        $del = "DELETE FROM news." . $dbTable . " WHERE " . $dbTable . ".id = " . $id ;
        $result = mysql_query($del);
        return $result;
    }





// ->



    public function __construct($dbHost, $dbName, $dbLogin, $dbPassw)
    {
        mysql_connect($dbHost, $dbLogin, $dbPassw);
        mysql_select_db($dbName);
    }
}

$dda = new MySqlCRUD('localhost', 'news', 'root', '123456');
//$data = ['author' => 'QQQQQQQ1111QQ', 'subject' => 'WWWWWWWWWWWWWWWWWWWWWWWW', 'bodynews' => 'EEEEEEEEEEEEEEEEEEEEEEEEEEEE'];
//echo $dda->dbUpdateRecord('main', $data, '282');

$data = ['id', 'date', 'author', 'subject'];

$rr = $dda->dbSelectColumnFromTable('main', $data, 'ORDER BY DATE DESC LIMIT 0, 20');
var_dump($rr);

?>