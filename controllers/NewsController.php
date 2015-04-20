<?php

require __DIR__ . '/../model/News.php';
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
        $model = new News();
        $this->view->result = $model->GetAllSubject();
        $this->view->display('newssubject');
    }

    public function actionOne()
    {
        $model = new News();
        $this->view->result = $model->GetOneNew($_GET['id']);
        $this->view->display('readnews');
    }

    protected function getTemlatePath()
    {
        return __DIR__ . '/../view/news/';
    }
}