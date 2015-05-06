<?php

spl_autoload_register('__autoload');

require __DIR__ . '/vendor/autoload.php';

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