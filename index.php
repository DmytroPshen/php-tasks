<?php
//// Задачі зі сторінки
//// http://old.code.mu/tasks/php/base/osnovy-raboty-s-massivami-v-php.html
/// Работа с массивами:
// Task 1. Создайте массив $arr=['a', 'b', 'c'].
// Выведите значение массива на экран с помощью функции var_dump().

//$arr = ['a', 'b', 'c'];
//var_dump($arr);

// Task 2. С помощью массива $arr из предыдущего номера
// выведите на экран содержимое первого, второго и третьего элементов.
//$arr = ['a', 'b', 'c'];
//echo "$arr[0] <br>";
//echo "$arr[1] <br>";
//echo "$arr[2] <br>";

// Task 3. Создайте массив $arr=['a', 'b', 'c', 'd']
// и с его помощью выведите на экран строку 'a+b, c+d'.

//$arr=['a', 'b', 'c', 'd'];
//echo $arr[0].'+'.$arr[1].', '.$arr[2].'+'.$arr[3];

// Task 4. Создайте массив $arr с элементами 2, 5, 3, 9.
// Умножьте первый элемент массива на второй, а третий элемент на четвертый.
// Результаты сложите, присвойте переменной $result.
// Выведите на экран значение этой переменной.

//$arr = [2, 5, 3, 9];
//$s1 = $arr[0] * $arr[1];
//$s2 = $arr[2] * $arr[3];
//$result = $s1 + $s2;
//echo $result;

// Task 5. 	Заполните массив $arr числами от 1 до 5.
// Не объявляйте массив, а просто заполните его присваиванием
// $arr[] = новое значение.

//$arr[] = 1;
//$arr[] = 2;
//$arr[] = 3;
//$arr[] = 4;
//$arr[] = 5;

/// Ассоциативные массивы
// Task 6. Создайте массив $arr. Выведите на экран элемент с ключом 'c'.
// $arr = ['a'=>1, 'b'=>2, 'c'=>3];

$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr['c'];
