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
            <form class="form-inline" action="/index.php?cntrl=user&act=auth" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" name="login" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Sign in</button>
            </form>
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
                <li role="presentation"><a
                        href="/index.php?cntrl=admin&act=delete&id=<?php echo $data->id; ?>">Удалить</a>
                </li>
                <li role="presentation"><a href="/index.php?cntrl=admin&act=edit&id=<?php echo $data->id; ?>">Редактировать</a>
                </li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
