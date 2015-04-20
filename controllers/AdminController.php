<?php

require __DIR__ . '/../model/News.php';
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
        $this->view->displayForm('addnews');
    }

    public function actionInsert()
    {
        $data = ['author' => $_POST['author'], 'subject' => $_POST['subject'], 'bodynews' => $_POST['bodynews']];
        $model = new News();
        $model->InsertNew($this->table(), $data);
        $this->view->displayForm('addnews');
    }


    protected function getTemlatePath()
    {
        return __DIR__ . '/../view/news/';
    }

}