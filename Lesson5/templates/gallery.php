<?php 
$connect = mysqli_connect("localhost", "root", "", "admin");
$sql = "SELECT * FROM admin.image_src";
$res = mysqli_query($connect,$sql);
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>
<?php foreach ($data as $image) : ?>
<a target="_blanc" href="photo.php"><img src="<?=$image["full_src"]?>"></a>
<?php
    var_dump($image["full_src"]);
 endforeach ?>

<style>
img{
    margin: 10px;
}
</style>
<form action="" enctype="multipart/form-data" method="post">
<input type="file" name='image'>
<input type="submit">
</form>