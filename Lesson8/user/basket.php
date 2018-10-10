<?php
include __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "autoload.php";

session_start();

$basket = [];

if(!empty($_SESSION['basket'])){
    $productsIds = array_keys($_SESSION['basket']);
    $products = getProductByIds($productsIds);
    foreach ($products as $product){
        $basket[] = [
            'product' => $product,
            'count' => $_SESSION['basket'][$product['id']],
        ];
    }
}
render('basket', ['basket' => $basket]);
?>