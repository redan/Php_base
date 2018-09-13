
<!-- Задание 3 -->
<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Сравниваются значения если бы было === то было бы false так как типы раные а значения одинаковые
    var_dump((int)'012345');     // php приводит данную строку к целому числу и уберает 0 так как 0 это индикатор того, что число в 8-ми ричной системе
    var_dump((float)123.0 === (int)123.0); // === сравнение по типу а не по значению, а типы тут разные
    var_dump((int)0 === (int)'hello, world'); // то же самое, что и в предыдущем примере
?>

<!-- Задание 4 -->
<?php
    $date = date ("l, d-M-Y H:i:s T");
    $pageName = "First page";
?>
<h1><?php echo $pageName ?></h1>
<p>Date and time is: <?php echo $date ?></p>

<!-- Задание 1 из доп заданий  -->
<?php
    $name = Даниил;
    $age = 24;
    $strigInfo = "Меня зовут " . $name . ". Через год мне будет " . ++$age . "лет, а еще через год " . ++$age . " лет. На моих часах сейчас: " . $date . ".";
    echo $strigInfo;
?>
<br>
<!-- Задание 2 из доп заданий  -->
<?php
    $strigInfo1 = str_replace(" ", "_", $strigInfo);
    echo $strigInfo1;
?>
<br>
<!-- Задание 3 из доп заданий  -->
<?php
    $strigInfo2 = substr($strigInfo , 157);
    echo $strigInfo2;
?>