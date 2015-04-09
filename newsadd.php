<?php

session_start();
session_unset();

include __DIR__ . '/model/handler.php';

$_SESSION['msg'] = dbAddNews($_POST['author'], $_POST['subject'], $_POST['bodynews']);

include __DIR__ . '/view/addnews.php';

?>