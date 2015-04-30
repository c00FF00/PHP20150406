<?php

namespace App\Controllers;
use App\Classes\E404Exception;
use App\Models\News as Model;

class News extends \AbstractController
{
    protected $option = 'ORDER BY date DESC LIMIT 0, 20';

    public function __construct()
    {
        $this->view = new \View('news');
    }

    public function actionAll()
    {
        $this->view->result = Model::findAll($this->option);
        $this->view->display('newssubject');
    }

    public function actionOne()
    {
        $this->view->result = Model::findOne($_GET['id']);
        $this->view->display('readnews');
    }

    public function action404()
    {
        $except = new E404Exception();
        $this->view->result = $except->message();
        $this->view->display('error');
    }

    protected function getTemlatePath()
    {
        return __DIR__ . '/../view/news/';
    }
}