<div>
<h1>Личный кабинет</h1>
<p>Логин:<?= $_SESSION['login']?></p>
<p>ID:<?= $_SESSION['id']?></p>
</div>

<div>
    <h3>Номер заказа: <?=$orderId?></h3>
    <p>
        Адрес заказа: <?=$orderAdress?> <br>
        Заказ: <?= $orderBasket?> <br>
        Статус заказа: <?=$orderStatus?> <br>
    </p>
</div>