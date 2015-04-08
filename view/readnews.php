<?php session_start(); session_unset(); ?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <script src="/js/bootstrap.min.js"></script>
    <!--    <link rel="stylesheet" href="/css/style.css">-->
    <title>Главная</title>
</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="page-header">
            <h1><strong>Новостной сайт</strong>
                <small>и не только</small>
            </h1>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="/index.php">Главная</a></li>
                    <li role="presentation" class="active"><a href="#">Новости</a></li>
<!--                    <li role="presentation"><a href="#">Messages</a></li>-->
                </ul>
            </div>
        </div>

    </header>
    <!-- .header-->


    <div class="content">
        <div class="panel panel-default">
            <!--            <div class="panel-heading">-->
            <h3 class="panel-title">
                <ol class="breadcrumb">
                    <li class="active"><?php echo $onenews['date']; ?></li>
                    <li><?php echo $onenews['author']; ?></li>
                    <li><?php echo $onenews['subject']; ?></li>

                </ol>
            </h3>
            <!--            </div>-->
            <div class="panel-body">
                <?php echo $onenews['bodynews']; ?>
            </div>
        </div>
    </div>
    <!-- .content -->
</div>
<!-- .wrapper -->

<footer class="footer">
    <strong>Footer:</strong></footer>
<!-- .footer -->
</body>
</html>
