<?php

session_start();
session_unset();

//include __DIR__ . '/model/dbread.php';

include __DIR__ . '/model/NewsManager.php';

//$result = dbReadAllSubjects();

$result =  $ddb -> dbReadAllSubjects();

include __DIR__ . '/view/newssubject.php';

?>

