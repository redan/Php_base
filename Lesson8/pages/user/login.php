<?php
include __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "autoload.php";

session_start();

render('login', []);
?>