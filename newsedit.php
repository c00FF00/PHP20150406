<?php
session_start();

include __DIR__ . '/model/NewsManager.php';

$onenews = $ddb -> dbReadOneNews($_GET['id']);

include __DIR__ . '/view/editnews.php';

?>