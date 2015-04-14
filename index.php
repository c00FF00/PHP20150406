<?php

session_start();
session_unset();

include __DIR__ . '/model/News.php';

$data = ['id', 'date', 'author', 'subject'];

$result = $db->dbSelectColumnFromTable('main', $data, 'ORDER BY DATE DESC');

include __DIR__ . '/view/newssubject.php';

?>

