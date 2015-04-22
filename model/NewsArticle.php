<?php

require __DIR__ . '/../classes/Model.php';


class NewsArticle extends Model
{

    protected static $table = 'main';

    public $id;
    public $author;
    public $subject;
    public $bodynews;
    public $date;

    public function insert() {
        $sql = "INSERT INTO "  . static::getTable() . " ( author, subject, bodynews ) VALUES ( :author, :subject, :bodynews )";
        $db = new Db();
        $this->id = $db->dbExecRet($sql,  [':author' => $this->author, ':subject' => $this->subject, ':bodynews' => $this->bodynews]);
    }

    public function update()
    {
        $sql = "UPDATE " . static::getTable() . " SET author=:author, subject=:subject, bodynews=:bodynews WHERE id=:id";
        $db = new Db();
        $db->dbExec($sql, [':id' => $this->id, ':author' => $this->author, ':subject' => $this->subject, ':bodynews' => $this->bodynews]);
    }

    public function save()
    {

    }



}