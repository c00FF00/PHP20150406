<?php
include __DIR__ . '/classes/View.php';
require __DIR__ . '/model/News.php';
//require __DIR__ . '/controllers/NewsController.php';

$view = new View('news');
$model = new News();

$view->result = $model->GetAllSubject();

$view->render('newssubject');

var_dump($view->render('newssubject'));



//var_dump($view->id);