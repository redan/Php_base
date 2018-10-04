<?php
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "db.php";
?>
<div>
<p>Авторизация</p>
<form action="testUser.php" method="post">
    <input type="login" name="login">
    <input type="password" name="password">
    <input type="submit">
</form>
</div>