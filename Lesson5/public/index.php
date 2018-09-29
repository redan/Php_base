<?php
header("Content-type: text/html; charset=utf-8");

include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "getGallery.php";
include ENGINE_DIR . "redirect.php";
include ENGINE_DIR . "upload_img.php";
include VENDOR_DIR . "funcImgResize.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_FILES['image'])){
        if(!preg_match("/\.(gif|png|jpg)$/", $_FILES['image']['name'])){
            echo"Мы принимаем только файлы gif,png,jpg";
            exit;
        }
        $maxFileSize = 1024*1024;
        if($_FILES['image']['size'] > $maxFileSize){
            echo"Файл больше 1 мб";
        } else {
            $fileName =  "img/" . $_FILES["image"]["name"];
            $minFileName = "img/" . "min/" . $_FILES["image"]["name"];

            move_uploaded_file($_FILES['image']['tmp_name'], $fileName);

            img_resize($fileName, $minFileName, 200, 200);

            sendSrcToSQL($fileName, $minFileName);

            redirect('index.php');
        }
        
    }
}

$gallery = getGallery();
include TEMPLATES_DIR . "gallery.php";
?>