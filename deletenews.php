<?php

session_start();
session_unset();

//include __DIR__ . '/model/NewsManager.php';

//$ddb -> dbDeleteOneNews($_GET['id']);



include __DIR__ . '/model/OOPread.php';

$db->dbDeleteById('main', $_GET['id'] );

$data = ['id', 'date', 'author', 'subject'];

$result = $db->dbSelectColumnFromTable('main', $data);

//$result = $db -> dbReadAllSubjects();

include __DIR__ . '/view/newssubject.php';

?>