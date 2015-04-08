<?php session_start(); session_unset(); ?>

<?php

include __DIR__ . '/../lib/db.php';

//Вставить одну статью в БД

if ('' !== $_POST['author']) {
    if ('' !== $_POST['subject']) {
        if ('' !== $_POST['bodynews']) {
            dbInsertNews($_POST['author'], $_POST['subject'], $_POST['bodynews']);
            $_SESSION['msg'] = 'Новость добавлена';
            header('Location: /addnews.php');
        } else {
            $_SESSION['msg'] = 'Новость не добавлена. Новость отсутствует';
            header('Location: /addnews.php');
        }
    } else {
        $_SESSION['msg'] = 'Новость не добавлена. Нет описания новости';
        header('Location: /addnews.php');
    }
} else {
    $_SESSION['msg'] = 'Новость не добавлена. Укажите автора.';
    header('Location: /addnews.php');
}

?>