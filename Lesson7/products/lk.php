<?php
include __DIR__ . "/../config/main.php";

session_start();
?>
<div>
<h1>Личный кабинет</h1>
<p>Логин:<?= $_SESSION['login']?></p>
<p>ID:<?= $_SESSION['id']?></p>
</div>