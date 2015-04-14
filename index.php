<?php

//include __DIR__ . '/controllers/NewsController.php';
include __DIR__ . '/controllers/AdminController.php';

//$contoller = new NewsController();
//$contoller->AllNews();


$controller = new AdminController();
$controller->addNews();