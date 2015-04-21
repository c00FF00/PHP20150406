<?php

class Db

{
    protected $dbname;

    public function __construct()
    {
        $cfg = include __DIR__ . '/../config/db.php';
        $this->dbname = $cfg['dbname'];
        mysql_connect($cfg['host'], $cfg['user'], $cfg['passw']);
        mysql_select_db($this->dbname);
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

    public function dbSelectAllFromTable($dbTable)
    {
        $query = "SELECT * FROM `" . $dbTable . "`";
        return $this->dbSelect($query);
    }

    public function dbSelectByFolder($dbTable, $data, $extsql = null)
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

    public function dbExec($sql)
    {
        $result = mysql_query($sql);
        return $result;
    }

    public function dbSelect($sql)
    {
        $resquery = mysql_query($sql);
        if (false !== $resquery) {
            $ret = [];
            while (false !== ($row = mysql_fetch_object($resquery))) {
                $ret[] = $row;
            }
            return $ret;
        } else {
            return $resquery;
        }
    }
}

