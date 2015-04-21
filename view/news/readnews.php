<?php session_start(); session_unset(); ?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/A/css/normalize.css">
    <link rel="stylesheet" href="/A/css/bootstrap.min.css">
    <link rel="stylesheet" href="/A/css/bootstrap-theme.min.css">
    <script src="/A/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/A/css/custom.css">
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
            <h3 class="panel-title">
                <ol class="breadcrumb">
                    <?php foreach ($result as $data) {
                    } ?>
                    <li class="active"><?php echo $data->date; ?></li>
                    <li><?php echo $data->author; ?></li>
                    <li><?php echo $data->subject; ?></li>
                </ol>
            </h3>
            <div class="panel-body">
                <?php echo $data->bodynews; ?>
            </div>
            <ul class="nav nav-pills">
                <li role="presentation"><a href="/index.php?cntrl=admin&act=delete&id=<?php echo $data->id; ?>">Удалить</a>
                </li>
                <li role="presentation"><a href="/ARCHIVE/newsedit.php?id=<?php echo $data->id; ?>">Редактировать</a>
                </li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
