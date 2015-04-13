<?php

session_start();
session_unset();

//include __DIR__ . '/model/NewsManager.php';

include __DIR__ . '/model/OOPread.php';

$data = ['id', 'date', 'author', 'subject'];

$result = $db->dbSelectColumnFromTable('main', $data, 'ORDER BY DATE DESC');

//$result =  $ddb -> dbReadAllSubjects();

include __DIR__ . '/view/newssubject.php';

?>

