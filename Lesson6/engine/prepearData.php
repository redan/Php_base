<?php
function prepearData($value){
    switch ($value){
        case mb_strtoupper(Сумма, 'UTF-8'):
            return summ;
            break;
        case mb_strtoupper(Разность, 'UTF-8'):
            return diff;
            break;
        case mb_strtoupper(Умножение, 'UTF-8'):
            return milti;
            break;
        case mb_strtoupper(Деление, 'UTF-8'):
            return divis;
            break;
    }
}