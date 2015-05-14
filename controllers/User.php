<?php

namespace controllers;

use gclasses\View;
use model\Users as model;

class User
{

    protected function getTemlatePath()
    {
        return __DIR__ . '/../view/news/';
    }

    public function __construct()
    {
        $this->view = new View('news');

    }

    public function actionAuth()
    {
        model::Check($_POST['login'], $_POST['password']);
        header('Location: http://10.0.3.103');
    }


}