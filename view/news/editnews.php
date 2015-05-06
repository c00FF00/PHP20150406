<?php session_start(); ?><!DOCTYPE html>
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
                    <li role="presentation" class="active"><a>Редактируем новость</a></li>

                </ul>
            </div>
        </div>

    </header>

    <?php foreach ($result as $data) {
    } ?>
    <form action="/index.php?cntrl=admin&act=update" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="author" required placeholder="<?php echo $data->author; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="subject" required placeholder="<?php echo $data->subject; ?>">
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="19" name="bodynews"><?php echo $data->bodynews; ?></textarea>
        </div>
        <button type="submit" class="btn btn-default" name="id" value="<?php echo $data->id; ?>">Сохранить</button>

    </form>

</div>

</body>
</html>