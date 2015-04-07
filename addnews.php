<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <title></title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="css/rs.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<div class="wrapper">

    <header class="header">
        <br><br>

        <div><h2><strong>Новостной сайт</strong></h2></div>
        <nav>
            <a href="read.php">Читать новости</a>&nbsp; &nbsp;
            <a href="admin.php">Добавить новость</a>
        </nav>

    </header>
    <!-- .header-->

    <main class="content">
        <div class="fform">
            <form action="/model/handler.php" method="post">
                <fieldset>
                    <div><input type="text" size="50" name="author" placeholder="Автор новости"></div>
                    <br>

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