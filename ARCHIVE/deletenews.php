<?php

session_start();
session_unset();

include __DIR__ . '/model/NewsOld.php';

$db->dbDeleteById('main', $_GET['id']);

$data = ['id', 'date', 'author', 'subject'];

$result = $db->dbSelectByFolder('main', $data);

include __DIR__ . '/view/newssubject.php';

?>