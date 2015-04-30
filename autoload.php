<?php
function __autoload($class)
{
    $paths = [
        __DIR__ . '/classes',
        __DIR__ . '/controllers',
        __DIR__ . '/model'
    ];
    foreach ($paths as $path) {
        $fileName = $path . '/' . $class . '.php';
        if (file_exists($fileName)) {
            require $fileName;
            return true;
        }
    }
    return false;
}

//function __autoload($class)
//{
//    if (false != strpos($class, '\\')) {
//        $classNameParts = explode('\\', $class);
//        if ($classNameParts[0] == 'App') {
//            unset($classNameParts[0]);
//            $fileName = __DIR__ . '/' . implode('/', $classNameParts) . '.php';
//            if (file_exists($fileName)) {
//                require $fileName;
//                return true;
//            }
//        }
//    }