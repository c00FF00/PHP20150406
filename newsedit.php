<?php
session_start();

include __DIR__ . '/model/NewsManager.php';

include __DIR__ . '/model/Article.php';

$onenews = $ddb -> dbReadOneNews($_GET['id']);

$art = new Article();

$art->author = $onenews['author'];
$art->subject = $onenews['subject'];
$art->text = $onenews['bodynews'];
$art->id = $onenews['id'];

include __DIR__ . '/view/editnews.php';

?>