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
    if ('' !== $author) {
        if ('' !== $subject) {
            if ('' !== $bodynews) {
                dbInsertNews($_POST['author'], $_POST['subject'], $_POST['bodynews']);
                return  'Новость добавлена';
            } else {
                return 'Новость не добавлена. Новость отсутствует';
            }
        } else {
            return 'Новость не добавлена. Нет описания новости';
        }
    } else {
        return 'Новость не добавлена. Укажите автора.';
    }
}
?>