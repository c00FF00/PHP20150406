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
    if ('' !== $_POST[$author]) {
        if ('' !== $_POST[$subject]) {
            if ('' !== $_POST[$bodynews]) {
                dbInsertNews($_POST['author'], $_POST['subject'], $_POST['bodynews']);
                $_SESSION['msg'] = 'Новость добавлена';
//                header('Location: /newsadd.php');
            } else {
                $_SESSION['msg'] = 'Новость не добавлена. Новость отсутствует';
//                header('Location: /newsadd.php');
            }
        } else {
            $_SESSION['msg'] = 'Новость не добавлена. Нет описания новости';
//            header('Location: /newsadd.php');
        }
    } else {
        $_SESSION['msg'] = 'Новость не добавлена. Укажите автора.';
//        header('Location: /newsadd.php');
    }
}
?>