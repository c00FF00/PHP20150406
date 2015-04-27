<?php

session_start();

class AdminController extends AbstractController

{

    protected $option = 'ORDER BY date DESC LIMIT 0, 20';

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
        $article = NewsArticle::findOne($_POST['id'])[0];
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



//    public function actionAuth()
//    {
//        try {
//            $user = new NewsUsers();
//            $user->login = $_POST['login'];
//            $user->passw = $_POST['passw'];
//            $user->check();
//           // var_dump($user);
//            $this->view->display('addnews');
//        } catch (E403Exception $e) {
//            $this->action403();
//        }
//    }

    public function action403()
    {
        $except = new E403Exception();
        $this->view->result = $except->message();
        $this->view->display('error');
    }

    protected function getTemlatePath()
    {
        return __DIR__ . '/../view/news/';
    }

}