<?php

namespace App\Controllers;
use App\Models;
use App\Classes\E404Exception;

include __DIR__ . '/autoload.php';


$ctrl = !empty($_GET['ctrl']) ? $_GET['ctrl'] : 'news';
$act = !empty($_GET['act']) ? $_GET['act'] : 'all';
$ctrlClassName = ucfirst($ctrl) . 'Controller';

try {
$controller = new $ctrlClassName;
$method = 'action' . ucfirst($act);
$controller->$method();
} catch (E404Exception $e) {
    $controller->action404();
}

