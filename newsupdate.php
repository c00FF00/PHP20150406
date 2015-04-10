<?php
session_start(); session_unset();
include __DIR__ . '/model/NewsManager.php';

$_SESSION['msg'] = $ddb -> dbUpdateOneNews($_POST['id'], $_POST['author'], $_POST['subject'], $_POST['bodynews']);

$result =  $ddb -> dbReadAllSubjects();
//
include __DIR__ . '/view/newssubject.php';

?>