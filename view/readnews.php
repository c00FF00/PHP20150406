<?php session_start(); session_unset(); ?><!DOCTYPE html>
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

<div class="wrapper">

    <header class="header">
        <br><br>
        <div><h2><strong>Новостной сайт</strong></h2></div>
        <nav>
            <a href="addnews.php">Добавить новость</a>
        </nav>

    </header>
    <!-- .header-->
    <?php
    include __DIR__ . '/../lib/db.php';

    $onenews = dbReadOneNews($_GET['id'])[0]; ?>

    <div class="content">
        <div><?php echo $onenews['author']; ?></div>
        <div><?php echo $onenews['subject']; ?></div>
        <div><?php echo $onenews['bodynews']; ?></div>

    </div>
    <!-- .content -->

</div>
<!-- .wrapper -->

<footer class="footer">
    <strong>Footer:</strong></footer>
<!-- .footer -->





</body>
</html>
