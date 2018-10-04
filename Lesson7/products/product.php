<?php
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "db.php";
include ENGINE_DIR . "getGallery.php";

$res = $_GET['id'] - 1;
$sql = "SELECT * FROM admin.`shop`";
$result = queryOne($sql, $res);
$resultForImg = getGallery($result["src_to_img"]);
?>
<?php foreach ($resultForImg as $img) : ?>
<img src="<?=$result["src_to_img"] . "/" . $img?>" width="250" alt="">
<?php endforeach?>
<h2><?=$result["product"]?></h2>
<p><?=$result["info"]?></p>