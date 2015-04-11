<?php

//include __DIR__ . '/model/dbread.php';

include __DIR__ . '/model/NewsManager.php';
//$onenews = dbReadOneNews($_GET['id'])[0];
include __DIR__ . '/model/Article.php';

$onenews = $ddb->dbReadOneNews($_GET['id']);

$art = new Article();

$art->author = $onenews['author'];
$art->subject = $onenews['subject'];
$art->text = $onenews['bodynews'];
$art->date = $onenews['date'];
$art->id = $onenews['id'];

include __DIR__ . '/view/readnews.php';

?>