<?php
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
    if($b == 0){
        echo("На ноль делить нельзя!");
        exit;
    }
    $result = $a / $b;
    return $result;
}
function calcFunc($funcUse, $a, $b){
    switch ($funcUse){
        case summ:
            return summ($a,$b);
            break;
        case diff:
            return diff($a,$b);
            break;
        case milti:
            return milti($a,$b);
            break;
        case divis:
            return divis($a,$b);
            break;
    }
}