<?php

namespace App\Classes;

include __DIR__ . '/../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

class Mailer extends PHPMailer {

    public function _construct() {
        $this->isSMTP();
    }

    public function sender($from,$fromname)
    {
        $this->From = $from;
        $this->FromName = $fromname;
    }

    public function to($recipient)
    {
        $this->addAddress($recipient);
    }

    public function data($subj,$body)
    {
        $this->CharSet = 'UTF-8';
        $this->isHTML(true);
        $this->Subject = $subj;
        $this->Body = $body;
    }

}
