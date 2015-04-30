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


$ctrl = !empty($_GET['cntrl']) ? $_GET['cntrl'] : 'news';
$action = !empty($_GET['act']) ? $_GET['act'] : 'actionAll';

$controllerName = 'App\\Controllers\\' . ucfirst($ctrl);;
$controller = new $controllerName();
$method = 'action' . ucfirst($action);
$method->$action();


//try {
//    $controller = new $controllerName;
//    $controller->$actionName();
//} catch (E404Exception $e) {
//    $controller->action404();
//}