<?php
header("Content-type: text/html; charset=utf-8");

$dir = "img";
$images = scandir($dir);
//Функция для прорисовки изображений
function renderImgs($dir,$dirName){
    foreach($dir as $key => $value){
        if($key < 2){
            continue;
        }
        echo("<a href=$dirName/$value><img src=$dirName/$value width=300px></a>");
    }
}
renderImgs($images, $dir);

$uploadsDir = "uploads";
$uploads = scandir($uploadsDir);
renderImgs($uploads, $uploadsDir);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_FILES['file'])){
        if(!file_exists("uploads")){
            mkdir("uploads");
        }

        if(!preg_match("/\.(gif|png|jpg)$/", $_FILES['file']['name'])){
            echo"Мы принимаем только файлы gif,png,jpg";
            exit;
        }

        $maxFileSize = 1024*1024;
        if($_FILES['file']['size'] > $maxFileSize){
            echo"Файл больше 1 мб";
        } else {
            $fileName = "uploads/" . $_FILES['file']['name'];

            move_uploaded_file($_FILES['file']['tmp_name'], $fileName);

            echo("<a href=$fileName><img src=$fileName width=300px></a>");
        }
        
    }
}
?>
<base target="_blank">
<style>
img{
    margin: 10px;
}
</style>
<form action="" enctype="multipart/form-data" method="post">
<input type="file" name='file'>
<input type="submit">
</form>