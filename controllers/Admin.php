<?php

namespace controllers;

use gclasses\E403Exception;
use gclasses\Mailer;
use gclasses\View;
use model\News as model;

class Admin extends Controller

{

    protected $option = 'ORDER BY date DESC LIMIT 0, 20';

    public function __construct()
    {
        if ('admin' != $_SESSION['role']) {
            throw new E403Exception;
        }
        $this->view = new View('news');
    }

    public function actionDelete()
    {
        model::delete($_GET['id']);
        $this->view->result = model::findAll($this->option);
        $this->view->display('newssubject');
    }

    public function actionEdit()
    {

        $this->view->result = model::findOne($_GET['id']);
        $this->view->display('editnews');
    }

    public function actionUpdate()
    {
        $article = model::findOne($_POST['id'])[0];
        $article->author = $_POST['author'];
        $article->subject = $_POST['subject'];
        $article->bodynews = $_POST['bodynews'];
        $article->save();
        $this->view->result = model::findAll($this->option);
        $this->view->display('newssubject');
    }

    public function actionAdd()
    {
        $this->view->display('addnews');
    }

    public function actionInsert()
    {
        $article = new model();
        $email = new Mailer();
        $email->sender('grigory@mail.ru', 'Администратор');
        $email->to('grigory.e@gmail.com');
        $email->data('Размещение новости', 'Новость автора ' . $_POST['author'] . ' размещена. ID новости ' . $_POST['id']);
        $article->author = $_POST['author'];
        $article->subject = $_POST['subject'];
        $article->bodynews = $_POST['bodynews'];
        $article->save();
        if ($email->send()) {
            echo 'Письмо отправлено';
        } else {
            echo 'Письмо не может быть отправлено. ';
            echo 'Ошибка: ' . $email->ErrorInfo;
        }
        $this->view->display('addnews');
    }

    public function actionExit()
    {
        $this->view->result = Model::findAll($this->option);
        $this->view->display('newssubject');
        session_unset();
        session_destroy();
    }

    protected function getTemlatePath()
    {
        return __DIR__ . '/../view/news/';
    }
}