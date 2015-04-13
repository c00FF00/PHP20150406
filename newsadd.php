<?php

session_start();
session_unset();

//include __DIR__ . '/model/NewsManager.php';

//$_SESSION['msg'] = dbAddNews($_POST['author'], $_POST['subject'], $_POST['bodynews']);

include  __DIR__ . '/model/OOPread.php';

$data = ['author' => $_POST['author'], 'subject' => $_POST['subject'], 'bodynews' => $_POST['bodynews']];

$db->dbInsertRecord('main', $data);

//$_SESSION['msg'] = $db -> dbAddNews($_POST['author'], $_POST['subject'], $_POST['bodynews']);

include __DIR__ . '/view/addnews.php';

?>