<?php
include __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "autoload.php";

session_start();

$res = $_GET['id'] - 1;
$sql = "SELECT * FROM admin.`shop`";
$result = queryOne($sql, $res);
$resultForImg = getCaseImg(++$res);
unset($resultForImg["id"]);
$resultForImg = array_filter($resultForImg, function($element) {
    return !empty($element);
});

render('productPage', ['resultForImg' => $resultForImg, 'res' => $res, 'result' => $result]);
?>
