<?php

abstract class BaseArticle {
    public $author;
    public $text;

//    abstract function view();
}

class Article extends BaseArticle {
    public $subject;
//    public function view() {
//
//        echo $this->author;
//        echo $this->subject;
//        echo $this->text;
//
//    }
}

$art = new Article();

$art->author = 'АВАТАР';
$art->title = 'Заголовок';
$art->text = 'ТЕЛО';


echo $art->author;


?>