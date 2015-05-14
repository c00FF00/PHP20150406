<?php session_start(); ?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/ht/css/normalize.css">
    <link rel="stylesheet" href="/ht/css/bootstrap.min.css">
    <link rel="stylesheet" href="/ht/css/bootstrap-theme.min.css">
    <script src="/ht/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/ht/css/custom.css">
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
                </ul>
            </div>
        </div>
    </header>

    <div class="content">
        <div class="panel panel-default">
            <?php echo '<h3>' . $this->result . '</h3>'; ?>
        </div>
    </div>
</div>


</body>
</html>