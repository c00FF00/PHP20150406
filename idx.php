<?php

require_once    __DIR__ .  '/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate('index.php');

echo $template->render(['title' => 'Страница TWIG', 'date' => '22.05.2015', 'author' => 'Я', 'id' => '254']);



