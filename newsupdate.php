<?php
session_start(); session_unset();





//include __DIR__ . '/model/NewsManager.php';

include __DIR__ . '/lib/BaseArticle.php';
include __DIR__ . '/lib/Article.php';
include __DIR__ . '/model/OOPread.php';

$data = [ 'author' => $_POST['author'], 'subject' => $_POST['subject'], 'bodynews' => $_POST['bodynews']];

$db->dbUpdateRecord('main', $data ,$_POST['id']);

//$_SESSION['msg'] = $ddb -> dbUpdateOneNews($_POST['id'], $_POST['author'], $_POST['subject'], $_POST['bodynews']);

//$result =  $ddb -> dbReadAllSubjects();
//
//include __DIR__ . '/view/newssubject.php';


$result = $db->dbSelectColumnFromTable('main', $data, 'ORDER BY DATE DESC');
include __DIR__ . '/view/newssubject.php';



?>