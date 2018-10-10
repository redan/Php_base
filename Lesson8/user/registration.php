<?php
include __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "autoload.php";
?>
<div>
<p>Регистрация</p>
<form action="newUser.php" method="post">
    <input type="login" name="login">
    <input type="password" name="password">
    <input type="submit">
</form>
</div>