<?php

include __DIR__ . '/model/NewsManager.php';

$editnews = $ddb -> dbReadOneNews($_GET['id']);


include __DIR__ . '/view/editnews.php';
$ddb -> dbUpdateOneNews($editnews['id'], $_POST['author'], $_POST['subject'], $_POST['bodynews']);


//include __DIR__ . '/view/newssubject.php';

?>