<?php

session_start();
session_unset();

include __DIR__ . '/model/NewsManager.php';

//$_SESSION['msg'] = dbAddNews($_POST['author'], $_POST['subject'], $_POST['bodynews']);

$_SESSION['msg'] = $ddb -> dbAddNews($_POST['author'], $_POST['subject'], $_POST['bodynews']);

include __DIR__ . '/view/addnews.php';

?>