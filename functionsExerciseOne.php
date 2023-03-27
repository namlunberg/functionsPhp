<?php
header("Content-Type: text/plain");
//Работа с регистром символов:
echo 'Работа с регистром символов', "\n";
$str = 'php';
$str = strtoupper($str);
echo $str, "\n";
$str = strtolower($str);
echo $str, "\n";
$str = 'london';
$str = ucfirst($str);
echo $str, "\n";
$str = lcfirst($str);
echo $str, "\n";
$str = 'london is the capital of great britain';
$str = ucwords($str);
echo $str, "\n";
$str = 'LONDON';
$str = ucfirst(strtolower($str));
echo $str, "\n";
echo "\n";
//Кол-во символов:
echo 'Кол-во символов', "\n";
$str = 'html css php';
$str = strlen($str);
echo $str, "\n";
$password = 7854541;
$password = strlen($password);
if (($password > 5) and ($password < 10)) {
    echo 'подходит';
} else {
    echo 'хуйня, переделывай';
}
echo "\n";
echo "\n";
//Работа с подстроками:
echo 'Работа с подстроками', "\n";
$str = 'html css php';
echo substr($str, 0, 4), "\n";
echo substr($str, 5, 3), "\n";
echo substr($str, 9, 3), "\n";
$str = 'aaaaaaaaaaaaaabbb';
echo substr($str, -3), "\n";
$str = 'https://web-sfx.bitrix24.ru/';
$str = substr($str, 0, 8);
if ($str === 'https://') {
    echo 'верно';
} else {
    echo 'не верно';
}
echo "\n";
$str = 'image.png';
$str = substr($str, -4);
if ($str === '.png') {
    echo 'верно';
} else {
    echo 'не верно';
}
echo "\n";
$str = 'image.png';
$str = substr($str, -4);
if (($str === '.png') or ($str === '.jpg')) {
    echo 'верно';
} else {
    echo 'не верно';
}
echo "\n";
$str = 'abvbknerbnwn';
$summ = strlen($str);
if ($summ > 5) {
    echo substr($str, 0, 5) . '...';
} else {
    echo $str;
}
echo "\n";
echo "\n";
//Замена символов (str_replace):
echo 'Замена символов (str_replace)', "\n";
$str = '31.12.2013';
$str = str_replace('.', '-', $str);
echo $str, "\n";
$str = 'abcbcacab';
$letters = ['a', 'b', 'c'];
$numbers = ['1', '2', '3'];
echo str_replace($letters, $numbers, $str), "\n";
$str = '1a2b3c4b5d6e7f8g9h0';
$numbers = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
echo str_replace($numbers, '', $str), "\n";
echo "\n";
echo "\n";
//Замена символов (strtr):
echo 'Замена символов (strtr)', "\n";
$str = 'abcbcacab';
echo strtr($str, "abc", "123"), "\n";
$str = 'abcbcacab';
$numbers = ['a' => '1', 'b' => '2', 'c' => '3'];
echo strtr($str, $numbers);
echo "\n";
echo "\n";
//Нахождение позиций подстроки:
echo 'Нахождение позиций подстроки', "\n";
$str = 'abc abc abc';
var_dump(strpos($str, 'b'));
echo "\n";
var_dump(strrpos($str, 'b'));
echo "\n";
$str = 'aaa aaa aaa aaa aaa';
var_dump(strpos($str, ' ', 4));
echo "\n";
$str = 'aaa..bb';
//??
if ((strpos($str, '..')) !== FALSE){
    echo 'есть';
} else {
    echo 'нет';
}
echo "\n";
$str = 'https://web-sfx.bitrix24.ru/';
if ((strpos($str, 'https://')) !== FALSE){
    echo 'да';
} else {
    echo 'нет';
}
//??
echo "\n";
echo "\n";
//Объединение и разивание строк:
echo 'Объединение и разивание строк', "\n";
$str = 'html css php';
var_dump(explode(' ', $str));
echo "\n";
$date = '2013-12-31';
//??
$date = explode('-', $date);
echo(implode('.', array_reverse($date)));
echo "\n";
echo $date[2] . '.' . $date[1] . '.' . $date[0];
echo "\n";
echo "\n";
//??
//Преобразует строку в массив:
echo 'Преобразует строку в массив', "\n";
$str = '1234567890';
var_dump(str_split($str));
var_dump(str_split($str, 2));
echo "\n";
echo "\n";
//Очистка строк:
echo 'Очистка строк', "\n";
$str = 'abc   ';
echo rtrim($str), "\n";
$str = '/php/';
echo trim($str, "/"), "\n";
$str = 'слова слова слова';
echo rtrim($str, ".") . ".";
echo "\n";
echo "\n";
//Работа с strrev:
echo 'Работа с strrev', "\n";
$str = '12345';
echo strrev($str), "\n";
$str = 'madam';
if ($str === strrev($str)) {
    echo 'подходит';
} else {
    echo 'не подходит';
}
echo "\n";
echo "\n";
//number_format:
echo 'number_format', "\n";
$str = '12345678';
echo number_format($str, 0, '', ' ');
echo "\n";
echo "\n";
//str_repeat:
echo 'str_repeat', "\n";
$i = 1;
while ($i < 10) {
    echo str_repeat('x', $i), "\n";
    $i++;
}
$i = 1;
while ($i < 10) {
    echo str_repeat("$i", $i), "\n";
    $i++; 
}
echo "\n";
echo "\n";
//Работа с strip_tags и htmlspecialchars:
echo 'Работа с strip_tags и htmlspecialchars', "\n";
$str = 'html, <b>php</b>, js';
echo strip_tags($str), "\n";
$str = '<a>html</a>, <b>php</b>, <i>js</i>';
echo strip_tags($str, '<b><i>'), "\n";
$str = 'html, <b>php</b>, js';
//??
echo htmlspecialchars($str, ENT_HTML5, '');
//??
echo "\n";
echo "\n";
//Доп задачи:
echo 'Доп задачи', "\n";
$str = 'var_test_text';
// $str = str_replace('_', ' ', $str);
// $str = ucwords($str);
// $str = lcfirst($str);
// $str = str_replace(' ', '', $str);
// echo $str;
echo str_replace(' ', '', lcfirst(ucwords(str_replace('_', ' ', $str))));
echo "\n";
$array = [3, 17, 43, 1, 45783, 3323, 85, 12, 80.3];
foreach ($array as $value) {
    if (((strpos($value, '3'))) !== FALSE) {
        echo $value, "\n";
    }
}

