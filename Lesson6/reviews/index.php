<?php
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "db.php";
include ENGINE_DIR . "calcFunc.php";
include ENGINE_DIR . "prepearData.php";

$sql = "SELECT * FROM admin.`reviews`";
$result = queryAll($sql);

$sqlRequest = "INSERT INTO admin.`reviews` (`id`, `Author`, `Text`) 
VALUES (NULL, '{$_POST[Author]}' , '{$_POST[Text]}')";
$request = execute($sqlRequest);

?>

<?php foreach ($result as $review) : ?>
<h2>Автор:<?=$review[Author]?></h2>
<p> <?=$review[Text]?></p>
<?php endforeach?>

<form action="" method="post">
    <textarea name="Text" id="" cols="30" rows="10"></textarea>
    <input type="text" name="Author">
    <input type="submit">
</form>