<?php
//Функция отправки запроса в бд отправляем путь к картинке
// $fileName - полный путь к картинке
// $minFileName - путь к минифицированной картинке
function sendSrcToSQL($fileName, $minFileName){
    $connect = mysqli_connect("localhost", "root", "", "admin");
    $sqlRequest = "INSERT INTO admin.`image_src` (`id`, `full_src`, `min_src`, `see_count`) 
    VALUES (NULL, '{$fileName}' , '{$minFileName}' , '1')";
    $resRequest = mysqli_query($connect,$sqlRequest);
    $close = mysqli_close($connect);
}