<?php session_start(); ?><!DOCTYPE html>
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

<?php

include __DIR__ . '/../lib/db.php';

$result = dbReadAllSubjects();
?>








<body>

<div class="wrapper">

    <header class="header">
        <br><br>
        <div><h2><strong>Новостной сайт</strong></h2></div>
        <nav>
            <a href="/addnews.php">Добавить новость</a>
        </nav>

    </header>
    <!-- .header-->

    <main class="content">
        <h3><strong>Новости</strong></h3>

        <?php foreach ($result as $subj) {?>
            <p><a href="/view/readnews.php?id=<?php echo $subj['id']; ?>" ><?php echo $subj['subject']; ?></a></p>
        <?php } ?>

    </main>
    <!-- .content -->

</div>
<!-- .wrapper -->

<footer class="footer">
    <strong>Footer:</strong></footer>
<!-- .footer -->

</body>
</html>



