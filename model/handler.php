<?php

include __DIR__ . '/../lib/db.php';

//Вставить одну статью в БД
if (dbInsertNews($_POST['author'], $_POST['subject'], $_POST['bodynews'])) {
    header('Location: /index.php');
};


?>