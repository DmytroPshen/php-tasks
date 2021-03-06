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

//$arr = ['a'=> 1, 'b'=> 2, 'c'=> 3];
//echo $arr['c'];

// Task 7. Создайте массив $arr. Найдите сумму элементов этого массива.
// $arr = ['a'=>1, 'b'=>2, 'c'=>3];

//$arr = ['a'=> 1, 'b'=> 2, 'c'=> 3];
//$sum = $arr['a'] + $arr['b'] + $arr['c'];
//echo $sum;

// Task 8. Создайте массив заработных плат $arr.
// Выведите на экран зарплату Пети и Коли.
// $arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];

//$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
//echo 'Петина зарплата '.$arr['Петя'].'<br>';
//echo 'Колина зарплата '.$arr['Коля'];

// Task 9. Создайте ассоциативный массив дней недели.
// Ключами в нем должны служить номера дней от начала недели
// (понедельник - должен иметь ключ 1, вторник - 2 и т.д.).
// Выведите на экран текущий день недели.

//$arr['1'] = 'Понедельник';
//$arr['2'] = 'Вторник';
//$arr['3'] = 'Среда';
//$arr['4'] = 'Четверг';
//$arr['5'] = 'Пятница';
//$arr['6'] = 'Субота';
//$arr['7'] = 'Воскресенье';
//
//echo $arr[5];

// Task 10. Пусть теперь номер дня недели хранится в переменной $day,
// например там лежит число 3.
// Выведите день недели, соответствующий значению переменной $day.

//$arr['1'] = 'Понедельник';
//$arr['2'] = 'Вторник';
//$arr['3'] = 'Среда';
//$arr['4'] = 'Четверг';
//$arr['5'] = 'Пятница';
//$arr['6'] = 'Субота';
//$arr['7'] = 'Воскресенье';
//
//$day = 5;
//echo $arr[$day];

// Task 11. Создайте многомерный массив $arr.
// С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный'.
// $arr = [
//	 'cms'=>['joomla', 'wordpress', 'drupal'],
//	 'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
// ];

//$arr = [
//    'cms'=>['joomla', 'wordpress', 'drupal'],
//    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
//];
//
//echo $arr['cms'][0]."<br>";
//echo $arr['cms'][2]."<br>";
//echo $arr['colors']["green"]."<br>";
//echo $arr['colors']["red"];

// Task 12. Создайте двухмерный массив. Первые два ключа - это 'ru' и 'en'.
// Пусть первый ключ содержит элемент,
// являющийся массивом названий дней недели по-русски,
// а второй - по-английски.
// Выведите с помощью этого массива понедельник по-русски и среду по английски
// (пусть понедельник - это первый день).

//$arr = [
//    'ru'=>['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Субота', 'Воскресенье'],
//    'en'=>['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
//];
//
//echo $arr['ru'][0]."<br>";
//echo $arr['en'][2];

// Task 13. Пусть теперь в переменной $lang хранится язык
// (она принимает одно из значений или 'ru', или 'en' - либо то, либо то),
// а в переменной $day - номер дня. Выведите словом день недели,
// соответствующий переменным $lang и $day.
// То есть: если, к примеру, $lang = 'ru' и $day = 3 - то выведем 'среда'.

$arr = [
    'ru'=>[1 => 'Понедельник', 2 => 'Вторник', 3 => 'Среда', 4 => 'Четверг', 5 => 'Пятница', 6 => 'Субота', 7 => 'Воскресенье'],
    'en'=>[1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday']
];

//$lang = 'ru';
$lang = 'en';
$day = 3;

echo $arr[$lang][$day];
