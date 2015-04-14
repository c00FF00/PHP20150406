<?php
session_start(); session_unset();

include __DIR__ . '/model/NewsOld.php';

$update = [ 'author' => $_POST['author'], 'subject' => $_POST['subject'], 'bodynews' => $_POST['bodynews']];

$db->dbUpdateRecord('main', $update, $_POST['id']);

$subjects = ['id', 'date', 'author', 'subject'];

$result = $db->dbSelectByFolder('main', $subjects, 'ORDER BY DATE DESC');

include __DIR__ . '/view/newssubject.php';



?>