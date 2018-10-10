<?php
include __DIR__ . "/config/main.php";
require_once ENGINE_DIR . "autoload.php";

$sql = "SELECT * FROM admin.`shop`";
$result = queryAll($sql);


session_start();

render('catalog', ['result' => $result]);
?>