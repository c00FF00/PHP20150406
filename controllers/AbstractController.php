<?php


abstract class AbstractController {

    abstract protected function getTemlatePath();

    public function render($template, $data)
    {
        extract($data);
        require $this->getTemlatePath() . $template . '.php';
    }

}