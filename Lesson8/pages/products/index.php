<?php

$sql = "SELECT * FROM admin.`shop`";
$result = queryAll($sql);

session_start();

render('catalog', ['result' => $result]);
?>