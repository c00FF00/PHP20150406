<?php

function dbConn()
{
    mysql_connect('localhost', 'root', '123456');
    mysql_select_db('news');
}

function dbQuery($query)
{
    dbConn();
    $resquery = mysql_query($query);
    $ret = [];
    while (false !== ($row = mysql_fetch_array($resquery))) {
        $ret[] = $row;

    }
    return $ret;
}

function dbAnySelectQuery($query)
{
    $resquery = mysql_query($query);
    $ret = [];
    while (false !== ($row = mysql_fetch_array($resquery))) {
        $ret[] = $row;

    }
    return $ret;
}



?>