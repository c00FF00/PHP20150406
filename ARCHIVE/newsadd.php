<?php

session_start();
session_unset();

include __DIR__ . '/model/NewsOld.php';

$data = ['author' => $_POST['author'], 'subject' => $_POST['subject'], 'bodynews' => $_POST['bodynews']];

$db->dbInsertRecord('main', $data);

include __DIR__ . '/view/addnews.php';

?>