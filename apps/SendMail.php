<?php

include __DIR__ . '/../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';


$email = new PHPMailer;

$email->isSMTP();
$email->Host = 'smtp.mail.ru';
$email->SMTPAuth = true;
$email->Username = 'grigory';
$email->Password = 'gtnhjgfdkjdcr';
$email->SMTPSecure = 'ssl';
$email->Port = '465';


$email->CharSet = 'UTF-8';
$email->From = 'grigory@mail.ru';
$email->FromName = 'Админ';
$email->addAddress('grigory.e@gmail.com');

$email->isHTML(true);

$email->Subject = 'Тема письма';
$email->Body = 'Текст можно с хтмл';

if( $email->send() ){
    echo 'Письмо отправлено';
}else{
    echo 'Письмо не может быть отправлено. ';
    echo 'Ошибка: ' . $email->ErrorInfo;
}

