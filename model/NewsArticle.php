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




}