<?php



class NewsArticle extends Model
{
    protected static $table = 'main';

    public $author;
    public $subject;
    public $bodynews;
    public $date;
}