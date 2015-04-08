<?php session_start();
session_unset(); ?>

<?php

switch ($_GET['task']) {
case 1:
    include __DIR__ . '/model/dbread.php';
    $onenews = dbReadOneNews($_GET['id'])[0];
    include __DIR__ . '/view/readnews.php';
    break;
default:
    include __DIR__ . '/model/dbread.php';
    $result = dbReadAllSubjects();
    include __DIR__ . '/view/newssubject.php';
break;
}

?>

