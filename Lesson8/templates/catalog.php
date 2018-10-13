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
<div class="products">
    <?php foreach ($result as $product) : ?>
    <div class="item">
        <a href="pages/products/product/?id=<?=$product["id"]?>">
            <h2><?=$product["product"]?></h2>
            <img src="<?="./pages/products/img/good{$product["id"]}/" . getCaseImg($product["id"])["img_1"]?>" alt="" width="250px">
        </a>
        <form action="pages/products/addToBasket" method="post">
            <input type="hidden" name="id" value="<?=$product["id"]?>">
            Количество
            <input type="text" name="count">
            <input type="submit" value="Добавить в корзину">
        </form>
    </div>
    <?php endforeach ?>
</div>