<?php
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "db.php";
include ENGINE_DIR . "getGallery.php";
include ENGINE_DIR . "basketCount.php";

$sql = "SELECT * FROM admin.`shop`";
$result = queryAll($sql);

session_start();
basketCount();

include TEMPLATES_DIR . "catalog.php";
?>