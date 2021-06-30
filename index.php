<?php
//Задачі узяті за адресою:
//http://old.code.mu/tasks/php/base/osnovy-yazyka-php-dlya-novichkov.html;

//// Работа с переменными
// Task 1. Создайте переменную $a и присвойте ей значение 3.
// Выведите значение этой переменной на экран
//$a = 3;
//echo "$a";

// Task 2. Создайте переменные $a=10 и $b=2.
//Выведите на экран их сумму, разность,
// произведение и частное (результат деления).
//$a = 10;
//$b = 2;
//$sum = $a + $b;
//$diff = $a - $b;
//$mult = $a * $b;
//$div = $a / $b;
//$mod = $a % $b;
//
//echo "$sum <br>";
//echo "$diff <br>";
//echo "$mult <br>";
//echo "$div <br>";
//echo "$mod";

// Task 3. Создайте переменные $c=15 и $d=2.
// Просуммируйте их, а результат присвойте переменной $result.
// Выведите на экран значение переменной $result.
//$c = 15;
//$d = 2;
//$result = $c + $d;
//echo "$result";

// Task 4. Создайте переменные $a=10, $b=2 и $c=5.
// Выведите на экран их сумму.
//$a = 10;
//$b = 2;
//$c = 5;
//$sum = $a + $b + $c;
//echo "$sum";

// Task 5. Создайте переменные $a=17 и $b=10.
// Отнимите от $a переменную $b и результат присвойте переменной $c.
// Затем создайте переменную $d, присвойте ей значение 7.
// Сложите переменные $c и $d, а результат запишите в переменную $result.
// Выведите на экран значение переменной $result.
//$a = 17;
//$b = 10;
//$c = $a - $b;
//$d = 7;
//$result = $c + $d;
//echo "$result";

////Работа со строками
// Task 6. 	Создайте переменную $text и присвойте ей значение 'Привет, Мир!'.
// Выведите значение этой переменной на экран.
//$text = 'Привет, Мир!';
//echo "$text";

// Task 7. Создайте переменные $text1='Привет, ' и $text2='Мир!'.
// С помощью этих переменных и операции сложения строк
// выведите на экран фразу 'Привет, Мир!'.
//$text1 = '\'Привет, ';
//$text2 = 'Мир!\'';
//echo "$text1"."$text2";

// Task 8. 	Создайте переменную $name и присвойте ей ваше имя.
// Выведите на экран фразу 'Привет, %Имя%!'.
// Вместо %Имя% должно стоять ваше имя.

//$name = 'Дмитрий';
//echo "'Привет, $name!";

// Task 9.  Создайте переменную $age и присвойте ей ваш возраст.
// Выведите на экран 'Мне %Возраст% лет!'.
//$age = 31;
//echo "'Мне $age лет!'";

////Обращение к символам строки
// Task 10. Создайте переменную $text и присвойте ей значение 'abcde'.
// Обращаясь к отдельным символам этой строки выведите на экран символ 'a',
// символ 'c', символ 'e'.
//$text = 'abcde';
//echo $text[0];
//echo $text[2];
//echo $text[4];

// Task 11. Дана произвольная строка, например, 'abcde'.
// Поменяйте первую букву (то есть букву 'a') этой строки на '!'.
//$text = 'abcde';
//$text[0] = '!';
//echo $text;

// Task 12. Создайте переменную $num и присвойте ей значение '12345'.
// Найдите сумму цифр этого числа.

//$num = '12345';
//$n0 = $num[0];
//$n1 = $num[1];
//$n2 = $num[2];
//$n3 = $num[3];
//$n4 = $num[4];
//$sum = $n0 + $n1 + $n2 + $n3 + $n4;
//echo $sum;

////Практика
// Task 13. Напишите скрипт,
// который считает количество секунд в часе, в сутках, в месяце.
//$min = 60;
//$hour = $min * 60;
//$date = $hour * 24;
//$month = $date * 30;
//echo "Hour has $hour seconds<br>";
//echo "Date has $date seconds<br>";
//echo "Month has $month seconds<br>";

// Task 14. Создайте три переменные - час, минута, секунда.
// С их помощью выведите текущее время в формате 'час:минута:секунда'.
//$hour = date("H");
//$minute = date("i");
//$second = date("s");
//echo "$hour:$minute:$second";

// Task 15. Создайте переменную, присвойте ей число.
// Возведите это число в квадрат (это значит нужно умножить его само на себя).
// Выведите его на экран.
//$var = 77;
//$q = $var * $var;
//echo $q;

//// Работа с присваиванием и декрементами
// Task 16. Переделайте этот код так,
// чтобы в нем использовались операции +=, -=, *=, /=.
// Количество строк кода при этом не должно измениться.
//$var = 47;
//$var = $var + 7;
//$var = $var - 18;
//$var = $var * 10;
//$var = $var / 20;
//echo $var;

//$var = 47;
//$var+=7;
//$var-=18;
//$var*=10;
//$var/=20;
//echo $var;

// Task 17. Переделайте этот код так,
// чтобы в нем использовалась операция .=.
// Количество строк кода при этом не должно измениться.
//$text = 'Я';
//$text = $text.' хочу';
//$text = $text.' знать';
//$text = $text.' PHP!';
//echo $text;

//$text = 'Я';
//$text .= ' хочу';
//$text .= ' знать';
//$text .= ' PHP!';
//echo $text;

// Task 18. 	Переделайте этот код так,
// чтобы в нем использовались операции ++ и --.
// Количество строк кода при этом не должно измениться.
//$var = 10;
//$var = $var + 1;
//$var = $var + 1;
//$var = $var - 1;
//echo $var;

//$var = 10;
//$var++;
//$var++;
//$var--;
//echo $var;

// Task 19. Переделайте этот код так,
// чтобы в нем использовались операции ++, -- , +=, -=, *=, /=.
// Количество строк кода при этом не должно измениться.
//$var = 10;
//$var = $var + 7;
//$var = $var + 1;
//$var = $var - 1;
//$var = $var + 12;
//$var = $var * 7;
//$var = $var - 15;
//echo $var;

//$var = 10;
//$var += 7;
//$var++;
//$var--;
//$var += 12;
//$var *= 7;
//$var -= 15;
//echo $var;

//// Задачі зі сторінки
//// http://old.code.mu/tasks/php/base/osnovy-raboty-s-massivami-v-php.html
/// Работа с массивами:
// Task 1. Создайте массив $arr=['a', 'b', 'c'].
// Выведите значение массива на экран с помощью функции var_dump().

//$arr = ['a', 'b', 'c'];
//var_dump($arr);

// Task 2. С помощью массива $arr из предыдущего номера
// выведите на экран содержимое первого, второго и третьего элементов.
$arr = ['a', 'b', 'c'];
echo "$arr[0] <br>";
echo "$arr[1] <br>";
echo "$arr[2] <br>";
