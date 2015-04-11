<?php

session_start();
session_unset();

include __DIR__ . '/model/NewsManager.php';

$ddb -> dbDeleteOneNews($_GET['id']);

$result = $ddb -> dbReadAllSubjects();

include __DIR__ . '/view/newssubject.php';

?>