<?php session_start(); ?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/custom.css">
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


        <form action="/newsupdate.php" method="post">
            <div class="form-group">
               <input type="text" class="form-control" name="author" placeholder="<?php echo $art->getAuthor();?>">
            </div>
            <div class="form-group">
               <input type="text" class="form-control" name="subject" placeholder="<?php echo $art->getSubject();?>">
            </div>
            <div class="form-group">
               <textarea class="form-control" rows="19" name="bodynews"><?php echo $art->getText(); ?></textarea>
           </div>
            <button type="submit" class="btn btn-default" name="id" value="<?php echo $art->getId(); ?>">Сохранить</button>

        </form>

</div>

</body>
</html>