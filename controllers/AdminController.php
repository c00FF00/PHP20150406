<?php

session_start();

require __DIR__ . '/../model/NewsArticle.php';
require __DIR__ . '/AbstractController.php';
require __DIR__ . '/../classes/View.php';

class AdminController extends AbstractController

{

    protected $option = 'ORDER BY DATE DESC LIMIT 0, 20';

    public function __construct()
    {
        $this->view = new View('news');
    }

    public function actionDelete()
    {
        NewsArticle::delete($_GET['id']);
        $this->view->result = NewsArticle::findAll($this->option);
        $this->view->display('newssubject');
    }

    public function actionEdit()
    {
        $this->view->result = NewsArticle::findOne($_GET['id']);
        $this->view->display('editnews');
    }

    public function actionUpdate()
    {
        $article = new NewsArticle();
        $article->id = $_POST['id'];
        $article->author = $_POST['author'];
        $article->subject = $_POST['subject'];
        $article->bodynews = $_POST['bodynews'];
        $article->save();
        $this->view->result = NewsArticle::findAll($this->option);
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
        $article->save();
        $this->view->display('addnews');
    }

    protected function getTemlatePath()
    {
        return __DIR__ . '/../view/news/';
    }

}