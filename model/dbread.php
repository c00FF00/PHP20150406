<?php

include __DIR__ . '/../lib/db.php';

function dbReadAllSubjects() {
    $query = "SELECT id, date, subject FROM  `" . 'main' . "` ORDER BY DATE DESC LIMIT 0 , 10";
    $result = dbQuery($query);
    return $result;
}

function dbReadOneNews($id) {
    $query = "SELECT date, author, subject, bodynews FROM  `" . 'main' . "` WHERE id =  '" . $id . "'";
    $result = dbQuery($query);
    return $result;
}


?>