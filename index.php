<?php

session_start();
session_unset();

include __DIR__ . '/model/NewsManager.php';

$result =  $ddb -> dbReadAllSubjects();

include __DIR__ . '/view/newssubject.php';

?>

