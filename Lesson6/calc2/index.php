<?php
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "calcFunc.php";
include ENGINE_DIR . "prepearData.php";

$funcUse = prepearData(mb_strtoupper($_POST[operation], 'UTF-8'));
$a = (int) $_POST[a];
$b = (int) $_POST[b];

$result = calcFunc($funcUse, $a, $b);
?>
<form action="" method="post">
<input type="text" name="a" pattern="^[ 0-9]+$" placeholder="Число 1">
<input type="text" name="b" pattern="^[ 0-9]+$" placeholder="Число 2">
<input type="submit" name="operation" value="Сумма">
<input type="submit" name="operation" value="Разность">
<input type="submit" name="operation" value="Умножение">
<input type="submit" name="operation" value="Деление">
</form>
<p>Результат = <?=$result?></p>