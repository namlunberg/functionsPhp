<?php
header("Content-Type: text/plain");
$array = range(1, 10);
$numbers = count($array);
$summ = array_sum($array);
$result = $summ / $numbers;
echo $result, "\n";
$array = range(1, 100);
$summ = array_sum($array);
echo $summ, "\n";
$array = array_fill(1, 10, 'x');
var_dump($array);
$array = range(1, 10);
shuffle($array);
var_dump($array);
$n = 5;
$array = range(1, $n);
$result = array_product($array);
var_dump($result);
$str = 'abcdef';
$array = str_split($str);
$array = array_reverse($array);
$str = implode($array);
$str = ucfirst($str);
$array = str_split($str);
$array = array_reverse($array);
$str = implode($array);
echo $str, "\n";
$array = [4, 9, 16, 25];
var_dump(array_map('sqrt', $array));
$values = range(1, 26);
$keys = range('a', 'z');
$array = array_combine($keys, $values);
var_dump($array);
$str = '1234567890';
$array = str_split($str, 2);
$result = array_sum($array);
echo $result;