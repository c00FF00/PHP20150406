<?php

namespace App\Models;

class News extends \Model
{
    protected static $table = 'main';

    public $author;
    public $subject;
    public $bodynews;
    public $date;
}