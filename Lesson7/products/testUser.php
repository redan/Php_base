<?php
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "db.php";

session_start();

if(isset($_POST["login"])){
    $login = $_POST["login"];
} if($login == "") {
    unset($_POST["login"]);
}
if(isset($_POST["password"])){
    $password = $_POST["password"];
} if($password == "") {
    unset($_POST["password"]);
}
if (empty($login) & empty($password)){
    exit("Неверная пара логин пароль");
}
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$login = trim($login);
$password = trim($password);

$sql = "SELECT * FROM `Users` WHERE login = '{$login}'";
$result = execute($sql);
$row = mysqli_fetch_array($result);
if(empty($row[password])){
    exit ("Пользователя с такой парой логин/пароль не существует");
} else {
    if($row[password] == $password){
        $_SESSION["login"] = $login;
        $_SESSION["id"] = $row["id"];
        echo "Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    } else {
        exit("Пользователя с такой парой логин/пароль не существует");
    }
}