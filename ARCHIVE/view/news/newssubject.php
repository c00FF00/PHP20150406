<?php session_start();
session_unset(); ?>
<!DOCTYPE html>
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
                    <li role="presentation" class="active"><a>Главная</a></li>
                    <li role="presentation"><a href="/index.php?cntrl=admin&act=add">Добавить новость</a></li>
                </ul>
            </div>
        </div>

    </header>


    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table-subj">
                <th>Дата</th>
                <th>Автор</th>
                <th>Тема новости</th>

                <?php foreach ($result as $data) { ?>
                    <tr>
                        <td><?php echo $data->date; ?></td>
                        <td><?php echo $data->author; ?></td>
                        <td class="subj"><a
                                href="/index.php?cntrl=news&act=one&id=<?php echo $data->id; ?>"><?php echo $data->subject; ?></a>
                        </td>
                    </tr>


                <?php } ?></table>
        </div>
    </div>

</div>
</body>
</html>

