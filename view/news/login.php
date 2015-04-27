<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form action="/index.php?cntrl=admin&act=auth" method="post">
    <div>
        <input type="email" class="form-control" name="login" required placeholder="E-mail">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="passw" required placeholder="Password">
    </div>
    <button type="submit" >Enter</button>
</form>


</body>
</html>