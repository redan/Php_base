<?php foreach ($resultForImg as $img) : ?>
<a href="<?="../img/good{$res}/" . $img?>"><img src="<?="../img/good{$res}/" . $img?>" width="250" alt=""></a>
<?php endforeach?>
<h2><?=$result["product"]?></h2>
<p><?=$result["info"]?></p>