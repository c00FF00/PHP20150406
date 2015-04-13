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
// ->

    function dbUpdateRecord($id, $dbTable, $data)
    {
        $setdata = [];

        foreach ($data as $column => $value) {

            $value0 = " '" . $value . "'";

            $setdata[] = " " . $column . " =" . $value0;
        }

        $dataset = implode(',', $setdata);

        $query = "UPDATE " . $dbTable . " SET " . $dataset . " WHERE " . $dbTable . ".id = '" . $id . "'";

        echo $query;

        $result = mysql_query($query);
        return $result;

    }





//    public function dbDeleteRecord ($column, $where)
//    {
//        $del =  'DELETE FROM ' . $column .  ' WHERE ' . $where;
//        mysql_connect($del);
//    }

    public function __construct($dbHost, $dbName, $dbLogin, $dbPassw)
    {
        mysql_connect($dbHost, $dbLogin, $dbPassw);
        mysql_select_db($dbName);
    }
}

$dda = new MySqlCRUD('localhost', 'news', 'root', '123456');
$data = ['author' => 'WER', 'subject' => 'Коротко', 'bodynews' => 'ЧТо то там'];
$dda->dbUpdateRecord('282','main',$data);

?>