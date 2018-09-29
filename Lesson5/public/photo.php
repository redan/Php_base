<?php
header("Content-type: text/html; charset=utf-8");

include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "getGallery.php";
include ENGINE_DIR . "redirect.php";
include ENGINE_DIR . "upload_img.php";
include VENDOR_DIR . "funcImgResize.php";

$id = htmlspecialchars($_GET["id"]);
$connect = mysqli_connect("localhost", "root", "", "admin");
$sql = "UPDATE admin.image_src SET see_count = see_count + 1 WHERE id = $id";
$res = mysqli_query($connect,$sql);
$sql = "SELECT full_src , see_count FROM admin.image_src WHERE id = $id";
$res = mysqli_query($connect,$sql);
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);
$close = mysqli_close($connect);
?>
<img src="../<?=$data[0]["full_src"]?>">
<p>Просмотры: <?= $data[0]["see_count"]?></p>