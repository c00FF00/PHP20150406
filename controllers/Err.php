<?php

namespace controllers;

use gclasses\E404Exception;
use gclasses\E403Exception;
use gclasses\View;


class Err
{
    protected function getTemlatePath()
    {
        return __DIR__ . '/../view/news/';
    }

    public function __construct()
    {
        $this->view = new View('news');
    }


    public function action404()
    {
        $except = new E404Exception();
        $this->view->result = $except->message();
        $this->view->display('error');
    }

    public function action403()
    {
        $except = new E403Exception();
        $this->view->result = $except->message();
        $this->view->display('error');
    }

}