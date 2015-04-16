<?php

if (!empty($_GET['cntrl'])):
    $controllerName = ($_GET['cntrl']);
endif;

if (!empty($_GET['act'])):
    $act = $_GET['act'];
endif;

$validController = ['news', 'admin'];
$validAction = ['all', 'add', 'delete', 'insert', 'one'];

if (in_array($controllerName, $validController) || (in_array($act, $validAction))) {
    $controllerName = ucfirst($controllerName) . 'Controller';
    $actionName = 'action' . $act;
} else {
    $controllerName = 'NewsController';
    $actionName = 'actionAll';
}

include __DIR__ . '/controllers/' . $controllerName . ".php";
$controller = new $controllerName;
$controller->$actionName();


