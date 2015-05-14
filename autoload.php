<?php

spl_autoload_register('__autoload');

require __DIR__ . '/vendor/autoload.php';

function __autoload($class)
{
    if (false != strpos($class, '\\')) {
        $classNameParts = explode('\\', $class);
        $fileName = __DIR__ . '/' . implode('/', $classNameParts) . '.php';
        if (file_exists($fileName)) {
            require $fileName;
            return true;
        }
    }
}
