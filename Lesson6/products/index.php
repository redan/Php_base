<?php
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "db.php";
include ENGINE_DIR . "getGallery.php";

$sql = "SELECT * FROM admin.`shop`";
$result = queryAll($sql);

?>
<?php foreach ($result as $product) : ?>
<a href="product.php?id=<?=$product["id"]?>">
<h2><?=$product["product"]?></h2>
<img src="<?=getImageForProd($product)?>" alt="">
</a>
<?php endforeach ?>
