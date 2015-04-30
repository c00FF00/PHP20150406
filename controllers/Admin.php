<?php


namespace App\Controllers;
use App\Classes\Mailer;
use App\Classes\E403Exception;
use App\Models\News as Model;

class Admin extends \AbstractController

{

    protected $option = 'ORDER BY date DESC LIMIT 0, 20';

    public function __construct()
    {
        $this->view = new \View('news');
    }

    public function actionDelete()
    {
        Model::delete($_GET['id']);
        $this->view->result = Model::findAll($this->option);
        $this->view->display('newssubject');
    }

    public function actionEdit()
    {

        $this->view->result = Model::findOne($_GET['id']);
        $this->view->display('editnews');
    }

    public function actionUpdate()
    {
        $article = Model::findOne($_POST['id'])[0];
        $article->author = $_POST['author'];
        $article->subject = $_POST['subject'];
        $article->bodynews = $_POST['bodynews'];
        $article->save();
        $this->view->result = Model::findAll($this->option);
        $this->view->display('newssubject');
    }

    public function actionAdd()
    {
        $this->view->display('addnews');
    }

    public function actionInsert()
    {
        $article = new News();
        $email = new Mailer();
        $email->sender('grigory@mail.ru', 'Администратор');
        $email->to('grigory.e@gmail.com');
        $article->author = $_POST['author'];
        $article->subject = $_POST['subject'];
        $article->bodynews = $_POST['bodynews'];
        $article->save();
        $email->data('Размещение новости','Новость автора [ ' . $_POST['author']  . ' ] размещена. ID новости [ ' . $article->id . ' ]');
        if( $email->send() ){
            echo 'Письмо отправлено';
        } else {
            echo 'Письмо не может быть отправлено. ';
            echo 'Ошибка: ' . $email->ErrorInfo;
        }
        $this->view->display('addnews');
    }

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