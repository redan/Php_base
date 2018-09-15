<?php
//Задание 1
$a = 455;
$b = 100;

if ($a >= 0 && $b >= 0) {
    echo($a - $b);
    echo "<br>";
}
if ($a < 0 && $b < 0) {
    echo($a*$b);
    echo "<br>";
}
if ($a >= 0 && $b < 0 || $a <= 0 && $b >=0) {
    echo($a+$b);
    echo "<br>";
}

//Задание 3 
//Сложение
function summ($a, $b){
    $result = $a + $b;
    return $result;
}
//Разность
function diff($a, $b){
    $result = $a - $b;
    return $result;
}
//Умножение
function milti($a,$b){
    $result = $a * $b;
    return $result;
}
//Деление
function divis($a, $b){
    $result = $a / $b;
    return $result;
}
//Задание 4
function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case summ:
            echo(summ($arg1,$arg2));
            break;
        case diff:
            echo(diff($arg1,$arg2));
            break;
        case milti:
            echo(milti($arg1,$arg2));
            break;
        case divis:
            echo(divis($arg1,$arg2));
            break;
    }
}
//Задание 6
function power($val, $pow){
    if ($pow > 0){
        static $powResult;
        $powResult = $val * $val;
        $pow--;
        var_dump($val);
        var_dump($powResult);
        power($val,$pow);
    } return $powResult;
}
var_dump(power(2,4));
//Задание 7 
echo "<br>";

function getHour(){
    if (date('G') % 10 == 1){
        return date('G') . "час";
    } else if (date('G') % 10 >= 2 && date('G') % 10 <= 4){
        return date('G') . "часов";
    } else {
        return date('G') . "часа";
    }
}
function getMinute(){
    if (date('i') % 10 == 1){
        return date('i') . "минута";
    } else if (date('G') % 10 >= 2 && date('G') % 10 <= 4){
        return date('i') . "минуты";
    } else {
        return date('i') . "минут";
    } 
}
echo(gethour() . getMinute());