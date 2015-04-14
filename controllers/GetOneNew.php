<?php

require __DIR__ . '/../classes/News.php';

$nnews = new News();

$onenew = $nnews->GetOneNew('8');

var_dump($onenew);