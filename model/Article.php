<?php

abstract class BaseArticle {

    public $author;
    public $text;

    abstract function viewAuthor();
    abstract function viewText();
}

class Article extends BaseArticle {

    public $subject;
    public $date;
    public $id;

    function viewAuthor() {
        echo $this->author;
    }

    function viewText() {
        echo $this->text;
    }

    function viewSubject() {
        echo $this->subject;
    }

    function viewDate() {
        echo $this->date;
    }

    function viewId() {
        echo $this->id;
    }
}

?>