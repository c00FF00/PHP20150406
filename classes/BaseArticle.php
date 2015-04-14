<?php

abstract class BaseArticle
{

    public $author;
    public $text;

    abstract protected function getAuthor();

    abstract protected function getText();

    abstract protected function getTableName();

}

?>