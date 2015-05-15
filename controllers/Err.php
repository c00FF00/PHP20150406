<?php

namespace controllers;

use gclasses\E404Exception;
use gclasses\E403Exception;
use gclasses\View;


class Err
{
    protected function getTemlatePath()
    {
        //return __DIR__ . '/../view/news/';
        return __DIR__ . '/../templates';
    }

    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem($this->getTemlatePath());
        $twig = new \Twig_Environment($loader);
        $this->view = $twig->loadTemplate('error.php');
    }


    public function action404()
    {
        $except = new E404Exception();
        echo $this->view->render(['message' => $except->message(), 'rrr' => '4']);
    }

    public function action403()
    {
        $except = new E403Exception();
        echo $this->view->render(['message' => $except->message()]);
    }

}