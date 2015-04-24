<?php

class NewsController extends AbstractController
{

    protected $option = 'ORDER BY date DESC LIMIT 0, 20';

    public function __construct()
    {
        $this->view = new View('news');
    }

    public function actionAll()
    {
        $this->view->result = NewsArticle::findAll($this->option);
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