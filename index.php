<?php

use gclasses\E403Exception;
use gclasses\E404Exception;
use gclasses\Valid;

session_start();

include __DIR__ . '/autoload.php';

if (Valid::Param($_GET['cntrl'], $_GET['act'])) {
    $controllerName = 'controllers\\' . ucfirst($_GET['cntrl']);
    $actionName = 'action' . $_GET['act'];
} else {
    $controllerName = 'controllers\News';
    $actionName = 'actionAll';
}

$err = new controllers\Err();

try {
    $controller = new $controllerName();
    $controller->$actionName();
} catch (E403Exception $e) {
    $err->action403();
} catch (E404Exception $e) {
    $err->action404();
}