<?php
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "db.php";
?>
<div>
<p>Регистрация</p>
<form action="newUser.php" method="post">
    <input type="login" name="login">
    <input type="password" name="password">
    <input type="submit">
</form>
</div>