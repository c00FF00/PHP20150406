<?php

session_start();
session_unset();

include __DIR__ . '/model/dbread.php';

$result = dbReadAllSubjects();

include __DIR__ . '/view/newssubject.php'

?>

