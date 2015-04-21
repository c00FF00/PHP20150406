<?php

require __DIR__ . '/model/NewsArticle.php';

$article = new NewsArticle();
$article->author = 'АВТОР';
$article->subject = 'Тестовая ';
$article->bodynews = '444444444444444444444444444';
$article->insert();



