<?php


abstract class AbstractController
{
    public $id;
    public $data;

    abstract protected function getTemlatePath();

    public function render($template, $data)
    {
        extract($data);
        require $this->getTemlatePath() . $template . '.php';
    }

    public function renderForm($template)
    {
        require $this->getTemlatePath() . $template . '.php';
    }

    protected function table()
    {
        return 'main';
    }

}