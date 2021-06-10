<?php
//Задачі узяті за адресою:
//http://old.code.mu/tasks/php/base/osnovy-yazyka-php-dlya-novichkov.html;

//Task 1. Создайте переменную $a и присвойте ей значение 3.
// Выведите значение этой переменной на экран
//$a = 3;
//echo "$a";

//Task 2. Создайте переменные $a=10 и $b=2.
//Выведите на экран их сумму, разность,
// произведение и частное (результат деления).
$a = 10;
$b = 2;

$sum = $a + $b;
$diff = $a - $b;
$mult = $a * $b;
$div = $a / $b;
$mod = $a % $b;

echo "$sum <br>";
echo "$diff <br>";
echo "$mult <br>";
echo "$div <br>";
echo "$mod";

?>