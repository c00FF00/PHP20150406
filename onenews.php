<?php

//include __DIR__ . '/model/dbread.php';

include __DIR__ . '/model/NewsManager.php';
//$onenews = dbReadOneNews($_GET['id'])[0];

$onenews = $ddb -> dbReadOneNews($_GET['id']);

include __DIR__ . '/view/readnews.php';

?>