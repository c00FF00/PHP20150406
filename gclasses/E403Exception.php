<?php
namespace gclasses;

class E403Exception extends \Exception
{
    public $msg = '403. Доступ запрещен.';

    public function message()
    {
        return $this->msg;
    }
}