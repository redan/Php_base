<?php
header("Content-type: text/html; charset=utf-8");

$connect = mysqli_connect("localhost", "root", "", "admin");
$sql = "SELECT * FROM admin.image_src";
$res = mysqli_query($connect,$sql);
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);


include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "getGallery.php";
include ENGINE_DIR . "redirect.php";
include ENGINE_DIR . "upload_img.php";
include VENDOR_DIR . "funcImgResize.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fileName = PUBLIC_DIR . "img/" . $_FILES["image"]["name"];
    $upload = uploadImg($fileName, "image");
    var_dump($upload);
    img_resize($fileName, PUBLIC_DIR . "img/min" . $_FILES["image"]["name"], 200, 200);
    redirect("index.php");
    //todo доделать проверку на тип файла и размер

    // if(isset($_FILES['file'])){
    //     if(!file_exists("uploads")){
    //         mkdir("uploads");
    //     }

    //     if(!preg_match("/\.(gif|png|jpg)$/", $_FILES['file']['name'])){
    //         echo"Мы принимаем только файлы gif,png,jpg";
    //         exit;
    //     }

    //     $maxFileSize = 1024*1024;
    //     if($_FILES['file']['size'] > $maxFileSize){
    //         echo"Файл больше 1 мб";
    //     } else {
    //         $fileName = "uploads/" . $_FILES['file']['name'];

    //         move_uploaded_file($_FILES['file']['tmp_name'], $fileName);

    //         echo("<a href=$fileName><img src=$fileName width=300px></a>");
    //     }
        
    // }
}

$gallery = getGallery();
include TEMPLATES_DIR . "gallery.php";
?>