<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Каталог</title>
</head>
<body>
<div class="header">
    <div style="border:solid 1px black;width:150px;">
        <p><a href="user/basket.php">Корзина:</a> <?=basketCount()?>товаров.</p>
        <a href="user/registration.php">Регистрация</a>
        <a href="user/login.php">Вход</a>
        <a href="user/lk.php">Личный кабинет</a>
    </div>
</div>
<div class="content"><?=$content?></div>
<div class="footer">Здесь будет футер</div>
</body>
</html>