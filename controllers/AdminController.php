<?php

session_start();

//require __DIR__ . '/../model/News.php';
require __DIR__ . '/../model/NewsArticle.php';
require __DIR__ . '/AbstractController.php';
require __DIR__ . '/../classes/View.php';

class AdminController extends AbstractController

{

    public function __construct()
    {
        $this->view = new View('news');
    }

    public function actionDelete()
    {
        $model = new News();
        $model->DeleteNew($this->table(), $_GET['id']);
        $this->view->result = $model->GetAllSubject();
        $this->view->display('newssubject');
    }

    public function actionAdd()
    {
        $this->view->display('addnews');
    }

    public function actionInsert()
    {
        $article = new NewsArticle();
        $article->author = $_POST['author'];
        $article->subject = $_POST['subject'];
        $article->bodynews = $_POST['bodynews'];
        $article->insert();
        echo $article->id;
        $this->view->display('addnews');
    }


    protected function getTemlatePath()
    {
        return __DIR__ . '/../view/news/';
    }

}