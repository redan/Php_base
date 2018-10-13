<div class="products">
    <?php foreach ($basket as $product) : ?>
    <div class="item">
            <h2><?=$product["product"]["product"]?></h2>
            <img src="<?="../products/img/good{$product["product"]["id"]}/" .
             getCaseImg($product["product"]["id"])["img_1"]?>" alt="" width="150px">
        <p>Количество: <?=$product["count"]?></p>
    </div>
    <?php endforeach ?>
</div>
<form action="pages/user/getOrder" method="post">
    <input type="text" name="adress">
    <input type="submit" value="Оформить заказ">
</form>