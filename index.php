<?php

//include __DIR__ . '/classes/Valid.php';
include __DIR__ . '/autoload.php';

if (Valid::Param($_GET['cntrl'], $_GET['act'])) {
    $controllerName = ucfirst($_GET['cntrl']) . 'Controller';
    $actionName = 'action' . $_GET['act'];
} else {
    $controllerName = 'NewsController';
    $actionName = 'actionAll';
}

//include __DIR__ . '/controllers/' . $controllerName . '.php';
$controller = new $controllerName;
$controller->$actionName();
