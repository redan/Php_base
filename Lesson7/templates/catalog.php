<style>
    .products{
        display: flex;
    }
    .item{
        max-width: 3000px;
        border: solid 1px black;
        margin: 0 10px;
    }
</style>
<div style="disply:flex;border:solid 1px black;width:150px;">
    <p>Корзина: <?=$_SESSION['count'];?>товаров.</p>
    <a href="registration.php">Регистрация</a>
    <a href="login.php">Вход</a>
    <a href="lk.php">Личный кабинет</a>
</div>
<div class="products">
    <?php foreach ($result as $product) : ?>
    <div class="item">
        <a href="product.php?id=<?=$product["id"]?>">
            <h2><?=$product["product"]?></h2>
            <img src="<?=getImageForProd($product)?>" alt="" width="250px">
        </a>
        <form action="" method="post">
            Количество
            <input type="text" name="count" id="">
            <input type="submit" value="Добавить в корзину">
        </form>
    </div>
    <?php endforeach ?>
</div>