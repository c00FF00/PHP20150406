<?php session_start();
session_unset(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <title></title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="/css/rs.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>




<?php
include __DIR__ . '/../lib/db.php';

//var_dump(dbQuery("SELECT id,subject FROM  `" . 'main' . "` ORDER BY DATE DESC"));
$onenews = dbReadOneNews($_GET['id'])[0]; ?>

<?php echo $onenews['author']; ?><br>
<?php echo $onenews['subject'];?><br>
<?php echo $onenews['bodynews'];?><br>



</body></html>
