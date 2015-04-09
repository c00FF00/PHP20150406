<?php session_start(); session_unset(); ?>

<?php

include __DIR__ . '/../lib/db.php';

function dbInsertNews($author, $subject, $textnews)
{
    $query = "INSERT INTO  `main` ( `author` , `subject`,  `bodynews` ) VALUES ('" . $author . "', ' " . $subject . "'  ,'" . $textnews . "')";
    dbConn();
    mysql_query($query);
}

//Вставить одну статью в БД
function dbAddNews($author, $subject, $bodynews)
{
    $msg = [
        'Новость добавлена',
        'Новость не добавлена. Новость отсутствует',
        'Новость не добавлена. Нет описания новости',
        'Новость не добавлена. Укажите автора.'
    ];
    if ('' !== $author) {
        if ('' !== $subject) {
            if ('' !== $bodynews) {
                dbInsertNews($_POST['author'], $_POST['subject'], $_POST['bodynews']);
                return $msg[0] ;
            } else {
                return $msg[1];
            }
        } else {
            return $msg[2];
        }
    } else {
        return $msg[3];
    }
}
?>