<?php

namespace model;

use gclasses\Model;

class News extends Model
{
    protected static $table = 'main';

    public $author;
    public $subject;
    public $bodynews;
    public $date;
}