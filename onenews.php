<?php

include __DIR__ . '/model/dbread.php';

$onenews = dbReadOneNews($_GET['id'])[0];

include __DIR__ . '/view/readnews.php';

?>