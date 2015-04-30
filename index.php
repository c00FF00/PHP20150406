<?php

namespace App\Controllers;
use App\Models;

include __DIR__ . '/autoload.php';


$ctrl = !empty($_GET['ctrl']) ? $_GET['ctrl'] : 'news';
$act = !empty($_GET['act']) ? $_GET['act'] : 'all';
$ctrlClassName = ucfirst($ctrl) . 'Controller';

$controller = new $ctrlClassName;
$method = 'action' . ucfirst($act);
$controller->$method();

