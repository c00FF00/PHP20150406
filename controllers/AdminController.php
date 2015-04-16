<?php

require __DIR__ . '/../model/News.php';
require __DIR__ . '/AbstractController.php';


class AdminController extends AbstractController

{

    public function actionDelete()
    {
        $model = new News();
        $model->DeleteNew($this->table(), $_GET['id']);
        $result = $model->GetAllSubject();
        $this->render('newssubject', ['result' => $result]);
    }

    public function actionAdd()
    {
        $this->renderForm('addnews');
    }

    public function actionInsert()
    {
        $data = ['author' => $_POST['author'], 'subject' => $_POST['subject'], 'bodynews' => $_POST['bodynews']];
        $model = new News();
        $model->InsertNew($this->table(), $data);
        $this->renderForm('addnews');
    }


    protected function getTemlatePath()
    {
        return __DIR__ . '/../view/news/';
    }

}