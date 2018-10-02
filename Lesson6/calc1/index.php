<?php
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "calcFunc.php";

$funcUse = $_POST[mathOperation];
$a = (int) $_POST[a];
$b = (int) $_POST[b];

$result = calcFunc($funcUse, $a, $b);
?>
<form action="" method="post">
<input type="text" name="a" pattern="^[ 0-9]+$" placeholder="Число 1">
<input type="text" name="b" pattern="^[ 0-9]+$" placeholder="Число 2">
<select name="mathOperation" id="">
    <option value="summ">Сложение</option>
    <option value="diff">Разность</option>
    <option value="milti">Умножение</option>
    <option value="divis">Деление</option>
</select>
<input type="submit">
</form>
<p>Результат = <?=$result?></p>