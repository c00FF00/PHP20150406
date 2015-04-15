<?php

$cntrl = $_GET['cntrl'];
$act = $_GET['act'];
$id = $_GET['id'];

$contollerClass = ['news', 'admin'];
$actionName = ['all', 'one'];
$other = ['id'];

if (in_array($cntrl, $contollerClass))
{ $contr = ucfirst($cntrl) . 'Controller.php';
    echo $contr;
    }
elseif (in_array($act, $actionName))
{
    $action = 'action' . ucfirst($act) . "()";
    echo $contr;
}
elseif (in_array($id, $other)) {
    $action = 'action' . ucfirst($act) . "(" . $id . ")";
    echo $contr;
}





//if (in_array($cntrl, $contollerClass) || in_array($act, $actionName)) {
//
//    require __DIR__ . '/controllers/' . ucfirst($cntrl) . 'Controller.php';
//    $contoller = new ucfirst($cntrl) . 'Controller.php';
//    $contoller->$Action .  . '()';
//
//} else {
//    require __DIR__ . '/controllers/NewsController.php';
//    $contoller = new NewsController();
//    $contoller->actionAll();
//}


//include __DIR__ . '/controllers/NewsController.php';
//include __DIR__ . '/controllers/AdminController.php';


////$contoller = new NewsController();
//$contoller->ActionAllNews();

////$contoller->ActionOneNew('280');

//$controller = new AdminController();
//$controller->addNews();