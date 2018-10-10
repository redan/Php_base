<?php
function getGallery($src){
    return array_filter(
        scandir($src),
        function($item){
            return !is_dir($src . $item);
        }
    );
}

function getImageForProd($product){
    $files = getGallery($product["src_to_img"]);
    return $product["src_to_img"] . "/" . $files[2];
}

function getImageForProdPage($result){
    $files = getGallery($result["src_to_img"]);
    return $result["src_to_img"] . "/" . $files;
}

function getCaseImg($count){
    $sql = "SELECT * FROM admin.`products` WHERE id ={$count}";
    return queryOne($sql);
}