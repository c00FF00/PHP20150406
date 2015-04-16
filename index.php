<?php

if (!empty($_GET['cntrl'])):
    $controllerName = ($_GET['cntrl']);
endif;

if (!empty($_GET['act'])):
    $act = $_GET['act'];
endif;

if (!empty($_GET['id'])):
    $id = $_GET['id'];
endif;

$validController = ['news', 'admin'];
$validAction = ['all', 'add', 'delete', 'insert', 'one'];
$data = ['id' => $_POST['id'],  'author' => $_POST['author'], 'subject' => $_POST['subject'], 'bodynews' => $_POST['bodynews']];

if (in_array($controllerName, $validController)) {
    $controllerName = ucfirst($controllerName) . 'Controller';
} else {
    $controllerName = 'NewsController';
}

if (in_array($act, $validAction)) {
    $actionName = 'action' . $act;
} else {
    $actionName = 'actionAll';
}

include __DIR__ . '/controllers/' . $controllerName . ".php";
$controller = new $controllerName;
$controller->id = $id;
$controller->data = $data;
$controller->$actionName();


