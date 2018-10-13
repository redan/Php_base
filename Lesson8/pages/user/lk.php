<?php
include __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "autoload.php";

session_start();
render('lk',[]);

$sql = "SELECT * FROM admin.`orders` WHERE userName = '{$_SESSION['login']}'";
$orders = queryOne($sql);


$orderId = $orders['id'];
$orderAdress = $orders['adress'];
$orderStatus = $orders['status'];
$orderBasket = base64_decode(unserialize($orders['basket']));

?>

<div>
    <h3>Номер заказа: <?=$orderId?></h3>
    <p>
        Адрес заказа: <?=$orderAdress?> <br>
        Заказ: <?= $orderBasket?> <br>
        Статус заказа: <?=$orderStatus?> <br>
    </p>
</div>