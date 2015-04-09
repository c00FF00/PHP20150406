<?php

include __DIR__ . '/model/handler.php';

dbAddNews($_POST['author'], $_POST['subject'], $_POST['bodynews']);

include __DIR__ . '/view/addnews.php';

?>