<?php

namespace App\Controllers;
use App\Models;

include __DIR__ . '/autoload.php';

//if (Valid::Param($_GET['cntrl'], $_GET['act'])) {
//    $controllerName = ucfirst($_GET['cntrl']) . 'Controller';
//    $actionName = 'action' . $_GET['act'];
//} else {
//    $controllerName = 'NewsController';
//    $actionName = 'actionAll';
//}


$ctrl = !empty($_GET['ctrl']) ? $_GET['ctrl'] : 'news';
$act = !empty($_GET['act']) ? $_GET['act'] : 'all';
$ctrlClassName = ucfirst($ctrl) . 'Controller';

$controller = new $ctrlClassName;
$method = 'action' . ucfirst($act);
$controller->$method();

//try {
//    $controller = new $controllerName;
//    $controller->$actionName();
//} catch (E404Exception $e) {
//    $controller->action404();
//}