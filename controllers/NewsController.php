<?php

require __DIR__ . '/../model/NewsArticle.php';
require __DIR__ . '/AbstractController.php';
require __DIR__ . '/../classes/View.php';


class NewsController extends AbstractController
{

    public function __construct()
    {
        $this->view = new View('news');
    }

    public function actionAll()
    {
        $this->view->result = NewsArticle::findAll('ORDER BY DATE DESC LIMIT 0, 20');
        $this->view->display('newssubject');
    }

    public function actionOne()
    {
        $this->view->result = NewsArticle::findOne($_GET['id']);
        $this->view->display('readnews');
    }

    protected function getTemlatePath()
    {
        return __DIR__ . '/../view/news/';
    }
}