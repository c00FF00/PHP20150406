<?php
session_start(); session_unset();

include __DIR__ . '/model/News.php';

$update = [ 'author' => $_POST['author'], 'subject' => $_POST['subject'], 'bodynews' => $_POST['bodynews']];

$db->dbUpdateRecord('main', $update, $_POST['id']);

$subjects = ['id', 'date', 'author', 'subject'];

$result = $db->dbSelectColumnFromTable('main', $subjects, 'ORDER BY DATE DESC');

include __DIR__ . '/view/newssubject.php';



?>