<?php
function basketCount(){
    if (empty($_SESSION['basket'])){
        return 0;
    } else {
        return array_sum($_SESSION["basket"]);
    }
}