<?php

class E404Exception extends Exception
{
    public $msg = '404. Не найдено.';

    public function message()
    {
        return $this->msg;
    }
}