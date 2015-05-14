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

<form class="form-horizontal" action="/index.php?cntrl=user&act=auth" method="post">
    <div class="form-group">

        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="rememberme" value="remember"> Запомнить меня
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Войти</button>
        </div>
    </div>
</form>

</body>
</html>