<?php
include __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "autoload.php";

session_start();


$userName = $_SESSION['login'];
$basket = $_SESSION['basket'];
$adress = $_POST['adress'];
$order = prepearBasket($basket);
$status = "Оформлен";

function getProductName($id){
    return queryOne("SELECT product FROM admin.`shop` WHERE id = {$id}");
}

function prepearBasket($basket){
    foreach ($basket as $key => $count){
        $order[] = [
        'Название' => getProductName($key)['product'],
        'Количество' => $count,
        ];
    }
    return base64_encode(serialize($order));
}

$sql = "INSERT INTO admin.`orders` (id , userName , basket , adress , status) 
VALUES (null , '{$userName}', '{$order}' , '{$adress}' , '{$status}')";
execute($sql);

unset($_SESSION['basket']);

redirect("../index.php");