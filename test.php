<?php

//include __DIR__ . '/lib/BaseArticle.php';
//include __DIR__ . '/lib/Article.php';
//include __DIR__ . '/lib/MySqlCRUD.php';
//
//
//$db = new MySqlCRUD('localhost', 'main', 'root', '123456');
//$art = new Article();
//
//$art->author = "Петя";
//
//echo $art->getTableName();


//function dbInsertRecord($dbTable, $data)
//{
//    $columns = [];
//    $values = [];
//
//    foreach ($data as $column => $value) {
//        $columns[] = "`" . $column . "`" ;
//        $values[] = "`" . $value . "`";
//    }
//
//    echo $dbColumn = implode(',', $columns); echo "\n";
//    echo $dbValues = implode(',', $values); echo "\n";
//    $query = "INSERT INTO `" . $dbTable . "` ( " .  $dbColumn . " ) VALUES ( " .  $dbValues . " )";
//    echo $query;
//}
//
//$data = [];
//
//$data = ['автор' => 'Петя', 'статья' => 'Что-то про мебель'];
//
//dbInsertRecord('main', $data);
//




function dbUpdateRecord($id, $dbTable, $data)
{
    $setdata = [];

    foreach ($data as $column => $value) {
        $column0 = " `" . $column . "`";
        $value0 = " '" . $value . "'";

        $setdata[] = $column0 . "=" . $value0;
    }

    $dataset = implode(',', $setdata);

    $query = "UPDATE `" . $dbTable . "` SET " . $dataset . " WHERE main.id = '" . $id . "'";

    echo $query;

    $result = mysql_query($query);
    return $result;

}

$data = [];

$data = ['author' => 'OOOOO', 'bodynews' => 'BODY'];


dbUpdateRecord('44', 'main.news', $data);












?>