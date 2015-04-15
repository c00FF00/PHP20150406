<?php

require __DIR__ . '/../model/News.php';
require __DIR__ . '/AbstractController.php';

class NewsController extends AbstractController

{

    public function actionAll()
    {
        $model = new News();
        $result = $model->GetAllSubject();
        $this->render('newssubject', ['result' => $result]);
    }

    public function actionOne($id)
    {
        $model = new News();
        $result = $model->GetOneNew($id);
        $this->render('readnews', [
            'id' => $result['id'],
            'date' => $result['date'],
            'author' => $result['author'],
            'subject' => $result['subject'],
            'bodynews' => $result['bodynews']
        ]);
    }

    protected function getTemlatePath()
    {
        return __DIR__ . '/../view/news/';
    }


}