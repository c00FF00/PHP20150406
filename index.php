<?php

if (!empty($_GET['cntrl'])) {
    $contr = ($_GET['cntrl']);
} else {
    $contr = 'news';
}

if (!empty($_GET['act'])) {
    $act = $_GET['act'];
} else {
    $act = 'all';
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = null;
}

$contollerClass = ['news', 'admin'];
$actionName = ['all', 'one', 'delete', 'insert'];
$other = ['id'];

if (in_array($contr, $contollerClass)) {
    $contr = ucfirst($contr) . 'Controller';
} else {
    $contr = 'NewsController';
}

if (in_array($act, $actionName)) {
    $action = 'action' . ucfirst($act) . "()";
} else {
    $action = 'actionAll()';
}

$datains = ['author' => $_POST['author'], 'subject' => $_POST['subject'], 'bodynews' => $_POST['bodynews']];


include __DIR__ . '/controllers/' . $contr . ".php";

$controller = new $contr;
switch ($act) {
    case 'insert' :
        $controller->actionInsert($datains);
        break;
    case 'delete' :
        $controller->actionDelete($id);
        break;
    case 'add' :
        $controller->actionAdd();
        break;
    case 'one' :
        $controller->actionOne($id);
        break;
    default:
        $controller->actionAll();
        break;
}