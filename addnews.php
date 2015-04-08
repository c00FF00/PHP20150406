<?php session_start(); ?><!DOCTYPE html>
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
                                        <li role="presentation"><a href="#">Messages</a></li>
                </ul>
            </div>
        </div>

    </header>

    <main class="content">
        <div class="fform">
            <form action="/model/handler.php" method="post">
                <fieldset>
                    <div class="msg"><input type="text" size="50" name="author" placeholder="Автор новости"></div>
                    <div class="msg"><?php echo $_SESSION['msg'] ?></div><br>

                    <div><input type="text" size="124" name="subject" placeholder="Тема новости"></div>
                    <br>

                    <div><textarea cols="95" rows="22" name="bodynews" placeholder="Введите новость...."></textarea></div>
                    <br>
                    <input type="submit" value="Разместить">
                </fieldset>
            </form>
        </div>
    </main>
    <!-- .content -->
</div>
<!-- .wrapper -->

<footer class="footer">
    <strong>Footer:</strong></footer>
<!-- .footer -->

</body>
</html>