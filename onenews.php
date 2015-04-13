<?php

//include __DIR__ . '/model/dbread.php';

//include __DIR__ . '/model/NewsManager.php';
//$onenews = dbReadOneNews($_GET['id'])[0];

include __DIR__ . '/lib/BaseArticle.php';
include __DIR__ . '/lib/Article.php';
include __DIR__ . '/model/OOPread.php';

//$onenews = $db->dbReadOneNews($_GET['id']);

$data = ['id', 'date', 'author', 'subject', 'bodynews'];

$onenew = $db->dbSelectColumnFromTable('main', $data, "WHERE id = " . $_GET['id']);

$onenews = $onenew[0];

$art = new Article();

$art->author = $onenews['author'];
$art->subject = $onenews['subject'];
$art->text = $onenews['bodynews'];
$art->date = $onenews['date'];
$art->id = $onenews['id'];

include __DIR__ . '/view/readnews.php';

?>