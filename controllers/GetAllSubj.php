<?php

require __DIR__ . '/../classes/News.php';

$nnews = new News();

$allsubjects = $nnews->GetAllSubject();

var_dump($allsubjects);