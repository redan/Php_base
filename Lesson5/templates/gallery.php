<?php 
$connect = mysqli_connect("localhost", "root", "", "admin");
$sql = "SELECT * FROM admin.image_src ORDER BY see_count DESC";
$res = mysqli_query($connect,$sql);
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);
$close = mysqli_close($connect);
?>

<?php foreach ($data as $image) : ?>
<a target="_blanc" href="photo.php/?id=<?=$image["id"]?>"><img src="<?=$image["min_src"]?>"></a>
<?php endforeach?>

<style>
img{
    margin: 10px;
}
</style>
<form action="" enctype="multipart/form-data" method="post">
<input type="file" name='image'>
<input type="submit">
</form>