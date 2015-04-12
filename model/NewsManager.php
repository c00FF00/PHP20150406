<?php

session_start(); session_unset();

include __DIR__ . '/../lib/db.php';


class NewsManager {
    public $author;
    public $subject;
    public $bodynews;
    public $id;
    public $table;

    public function dbSelectAllRecords($table) {
        $query = "SELECT * FROM  '" . $table . "'";
        $result = dbAnySelectQuery($query);
        return $result;
    }


    public function dbReadAllSubjects() {
        $query = "SELECT id, date, author, subject FROM  `" . 'main' . "` ORDER BY DATE DESC LIMIT 0 , 10";
        $result = dbAnySelectQuery($query);
        return $result;
    }

    public function dbReadOneNews($id) {
        $query = "SELECT id, date, author, subject, bodynews FROM  `" . 'main' . "` WHERE id =  '" . $id . "'";
        $result = dbAnySelectQuery($query);
        return $result[0];
    }

    public function dbDeleteOneNews($id) {
        $query = "DELETE FROM news.main WHERE main.id =  '" . $id . "'" ;
        mysql_query($query);
    }

    public function dbUpdateOneNews($id, $author, $subject, $bodynews) {
        $query = "UPDATE news.main SET author = '" . $author . "' , subject = '" . $subject . "', bodynews = '" . $bodynews . "' WHERE main.id = '" . $id . "'" ;
        $msg = [
            'Новость обновлена',
            'Ну а новость, новость-то где?',
            'Описание бы ввести',
            'Забыли Автора'
        ];
        if ('' !== $author) {
            if ('' !== $subject) {
                if ('' !== $bodynews) {
                    mysql_query($query);
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

        mysql_query($query);
    }


    public function dbAddNews($author, $subject, $bodynews)
    {
        $query = "INSERT INTO  `main` ( `author` , `subject`,  `bodynews` ) VALUES ('" . $author . "', ' " . $subject . "'  ,'" . $bodynews . "')";
        $msg = [
            'Новость добавлена',
            'Новость не добавлена. Новость отсутствует',
            'Новость не добавлена. Нет описания новости',
            'Новость не добавлена. Укажите автора.'
        ];
        if ('' !== $author) {
            if ('' !== $subject) {
                if ('' !== $bodynews) {
                    mysql_query($query);
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

    public function __construct($dbHost, $dbName, $dbLogin, $dbPassw) {

        $this->dbHost = $dbHost;
        $this->dbName = $dbName;
        $this->dbLogin = $dbLogin;
        $this->dbPassw = $dbPassw;

        mysql_connect($dbHost, $dbLogin, $dbPassw);
        mysql_select_db($dbName);
    }

}

$ddb  =  new NewsManager('localhost', 'news', 'root', '123456');
//$ddb -> dbSelectAllRecords('main');

?>