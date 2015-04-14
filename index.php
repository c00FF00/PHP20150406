<?php

//session_start();
//session_unset();
//
//include __DIR__ . '/model/NewsOld.php';
//
//$data = ['id', 'date', 'author', 'subject'];
//
//$result = $db->dbSelectByFolder('main', $data, 'ORDER BY DATE DESC');
//
//include __DIR__ . '/view/newssubject.php';
//


include __DIR__ . '/controllers/NewsController.php';

$contoller = new NewsController();
$contoller->AllNews();