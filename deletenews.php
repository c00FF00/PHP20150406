<?php

session_start();
session_unset();

include __DIR__ . '/model/OOPread.php';

$db->dbDeleteById('main', $_GET['id'] );

$data = ['id', 'date', 'author', 'subject'];

$result = $db->dbSelectColumnFromTable('main', $data);

include __DIR__ . '/view/newssubject.php';

?>