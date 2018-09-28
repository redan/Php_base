<?php
function uploadImg($destination, $atribute = "file"){
    if(isset($_FILES[$atribute])){
        move_uploaded_file($_FILES['file']['tmp_name'], $destination);
    }
}