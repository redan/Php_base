<?php
function basketCount(){
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    } else {
        $_SESSION['count'] += $_POST['count'];
    }
}