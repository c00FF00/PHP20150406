<?php session_start();
session_unset(); ?>

<?php
include __DIR__ . '/../lib/db.php';

var_dump(dbQuery("SELECT id,subject FROM  `" . 'main' . "` ORDER BY DATE DESC"));


?>


