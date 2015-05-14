<?php

namespace controllers;

abstract class Controller
{
    public function render($template, $data)
    {
        extract($data);
        require $this->getTemlatePath() . $template . '.php';
    }

    abstract protected function getTemlatePath();

    public function renderForm($template)
    {
        require $this->getTemlatePath() . $template . '.php';
    }

    protected function table()
    {
        return 'main';
    }
}