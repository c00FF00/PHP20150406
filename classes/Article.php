<?php

class Article extends BaseArticle
{

    public $subject;
    public $date;
    public $id;
    public $dbTable;

    public function getAuthor()
    {
        return $this->author;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTableName()
    {
        return $this->dbTable;
    }

}
