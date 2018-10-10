<?php
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "db.php";
include ENGINE_DIR . "getGallery.php";
include ENGINE_DIR . "redirect.php";

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $productId = $_POST['id'];
    $productCount = $_POST['count'];

    if(isset($_SESSION['basket'][$productId])){
        $_SESSION['basket'][$productId] += (int) $productCount;
    } else {
        $_SESSION['basket'][$productId] = (int) $productCount;
    }
}

redirect($_SERVER['HTTP_REFERER']);