<?php
//Задание 1
$i = 0;
while ($i < 100) {
    $i++;
    if ($i % 3 == 0) {
        echo("$i;");
    }
}
//Задание 2
echo("<br/>");
$i = 0;
do {
    if ($i == 0 ) {
    echo("$i - это ноль <br>");
    } else if ($i % 2 == 0){
        echo("$i - это четное число <br/>");
    } else {
        echo("$i - это нечетное число <br/>");
    }
    $i++;
} while ($i < 11) ;
echo("<br/>");
//Задание 3
$localCity = [
    "Московская область" => [
        "Москва",
        "Зеленоград",
        "Клин",
    ],
    "Ленинградская область" => [
        "Санкт-Петербург",
        "Всеволожск",
        "Павловск",
        "Кронштадт",
    ],
    "Рязанская область" => [
        "Рязань",
        "Щацк",
        "Сасово",
    ],
    "Нижегородская область" => [
        "Нижний Новгород",
        "Кстово",
        "Бор",
    ],
];
foreach($localCity as $key => $value){
    echo("<br>$key:<br>");
    foreach($localCity[$key] as $key => $value){
        echo("$value, ");
    }
}
//Задание 4
$letters = [
    "а" => "a",
    "б" => "b",
    "в" => "v",
    "г" => "g",
    "д" => "d",
    "ё" => "e",
    "е" => "e",
    "ж" => "zh",
    "з" => "z",
    "и" => "i",
    "й" => "y",
    "к" => "k",
    "л" => "l",
    "м" => "m",
    "н" => "n",
    "о" => "o",
    "п" => "p",
    "р" => "r",
    "с" => "s",
    "т" => "t",
    "у" => "u",
    "ф" => "f",
    "х" => "kh",
    "ц" => "ts",
    "ч" => "ch",
    "ш" => "sh",
    "щ" => "shch",
    "ъ" => "",
    "ы" => "y",
    "ь" => "",
    "э" => "e",
    "ю" => "yu",
    "я" => "ya",
    " " => " ",
    "." => ".",
    "," => ",",
];
//Очевидный минус которы сразу бросается в глаза это регистрозависимость, пока не придумал как ее победить
function getTranslit($letters, $strig){
    $strArray = preg_split('//u',$strig,null,PREG_SPLIT_NO_EMPTY);
    $finalStr = "<br>";
    foreach ($strArray as $keyRus => $valueRus){
        foreach ($letters as $key => $value){
            if ($valueRus == $key) {
                $finalStr .= $value;
            }
        }
    }
    echo($finalStr);
}
$strForTranslit = "образовательный портал создает условия для реализации основных профессиональных образовательных программ.";
echo("<br>");
getTranslit($letters, $strForTranslit);
//Задание 5
echo("<br>");
$replase = str_replace(" ", "_", $strForTranslit);
echo($replase);
//Задание 6
$menu = [
    "Home" => "#",
    "Chapter 1" => [
        "point 1" => "#",
        "point 2" => "#",
        "point 3" => "#",
    ],
    "Chapter 2" => [
        "point 1" => "#",
        "point 2" => "#",
        "point 3" => "#",
    ],
    "Contact" => "#",
];
function menuRender($array){
    echo("<ul>");
    foreach($array as $key => $value){
        if(is_array($value)){
            echo("<li>$key<ul>");
            foreach($array[$key] as $subKey => $subValue){
                echo("<li><a href=$subValue>$subKey</a></li>");
            }
            echo("</ul></li>");
        } else {
            echo("<li><a href=$value>$key</a></li>");
        }
        
    }
    echo("</ul>");
}
menuRender($menu);
//Задние 7
for($i = 0 ; $i < 10 ; print($i++)){
}
//Задание 8
foreach($localCity as $key => $value){
    echo("<br>$key:<br>");
    foreach($localCity[$key] as $key => $value){
        if(substr($value, 0 , 2) == "К"){
            echo("$value, ");
        }
    }
}
//Задание 9 
function getTranslitReplase($letters, $strig){
    $strArray = preg_split('//u',$strig,null,PREG_SPLIT_NO_EMPTY);
    $finalStr = "<br>";
    foreach ($strArray as $keyRus => $valueRus){
        foreach ($letters as $key => $value){
            if ($valueRus == $key) {
                $finalStr .= $value;
            }
        }
    }
    $finalStr = str_replace(" ", "_", $finalStr);
    echo($finalStr);
}
getTranslitReplase($letters, $strForTranslit);