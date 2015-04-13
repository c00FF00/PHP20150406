<?php
session_start();

//include __DIR__ . '/model/NewsManager.php';


include __DIR__ . '/lib/BaseArticle.php';
include __DIR__ . '/lib/Article.php';
include __DIR__ . '/model/OOPread.php';


//$onenews = $ddb -> dbReadOneNews($_GET['id']);


$data = ['id', 'date', 'author', 'subject', 'bodynews'];

$onenew = $db->dbSelectColumnFromTable('main', $data, "WHERE id = " . $_GET['id']);


//$data = ['id', 'date', 'author', 'subject'];
//
//$result = $db->dbSelectColumnFromTable('main', $data, 'ORDER BY DATE DESC');

$onenews = $onenew[0];

$art = new Article();

$art->author = $onenews['author'];
$art->subject = $onenews['subject'];
$art->text = $onenews['bodynews'];
$art->date = $onenews['date'];
$art->id = $onenews['id'];

include __DIR__ . '/view/editnews.php';

?>