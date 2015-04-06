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
            <form action="addnews.php" method="post">
                <div><input type="text" size="160" placeholder="Тема новости"></div>
                <div><textarea cols="100" rows="10" placeholder="Введите новость...."></textarea></div>
                <input type="submit" value="Разместить">

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