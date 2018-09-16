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
    var_dump($strig);
    var_dump($strArray);
    $finalStr = "<br>";
    foreach ($strArray as $keyRus => $valueRus){
        foreach ($letters as $key => $value){
            if ($valueRus == $key) {
                $finalStr .= $value;
            }
        }
    }
    var_dump($finalStr);
    echo($finalStr);
}
$strForTranslit = "образовательный портал создает условия для реализации основных профессиональных образовательных программ.";
echo("<br>");
getTranslit($letters, $strForTranslit);