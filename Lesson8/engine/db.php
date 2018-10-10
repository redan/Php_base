<?php
function getConnection(){
    $config = include CONFIG_DIR . "db.php";
    $conn = mysqli_connect($config['host'], $config['user'], $config['password'], $config['dbName']);
    return $conn;
}

function execute($sql){
    return mysqli_query(getConnection(), $sql);
}

function queryAll($sql){
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function queryOne($sql, $count = 0){
    return queryAll($sql)[$count];
}

function closeConnection(){
    return mysqli_close(getConnection());
}

function getProductByIds(array $ids){
    $in = implode(", ", $ids);
    return queryAll("SELECT * FROM admin.`shop` WHERE id IN ({$in})");
}