<?php
header("Content-Type: text/plain");
//Работа с count:
echo 'Работа с count', "\n";
$array = [1, 2, 3, 7];
var_dump (count($array));
echo $array[((count($array)) - 1)];
echo "\n";
echo "\n";
//Работа с in_array:
echo 'Работа с in_array', "\n";
var_dump ((in_array(3, $array, true)));
echo "\n";
echo "\n";
//Работа с array_sum и array_product:
echo 'Работа с array_sum и array_product', "\n";
$array = [1, 2, 3, 4, 5];
echo array_sum($array), "\n";
echo array_product($array), "\n";
$summ = array_sum($array);
$num = count($array);
$result = $summ / $num;
echo $result;
echo "\n";
echo "\n";
//Работа с range:
echo 'Работа с range', "\n";
$array = range(1, 100);
$array = range('a', 'z');
$array = range(1, 9);
$str = implode('-', $array);
echo $str, "\n";
$array = range(1, 100);
echo array_sum($array), "\n";
$array = range(1, 10);
echo array_product($array);
echo "\n";
echo "\n";
//Работа с array_merge:
echo 'Работа с array_merge', "\n";
$arrayOne = [1, 2, 3];
$arrayTwo = ['a', 'b', 'c'];
var_dump(array_merge($arrayOne, $arrayTwo));
echo "\n";
echo "\n";
//Работа с array_slice:
echo 'Работа с array_slice', "\n";          
$array = [1, 2, 3, 4, 5];   
$result = array_slice($array, 1, 3);
var_dump($result);
echo "\n";
echo "\n";
//Работа с array_splice:
echo 'Работа с array_splice', "\n";
$array = [1, 2, 3, 4, 5];
array_splice($array, 1, 2);
var_dump($array);
$array = [1, 2, 3, 4, 5];
$newArray = array_splice($array, 1, 3);
var_dump($newArray);
$array = [1, 2, 3, 4, 5];
$arrayPlus = ['a', 'b', 'c'];
array_splice($array, 3, 0, $arrayPlus);
var_dump($array);
$array = [1, 2, 3, 4, 5];
array_splice($array, 1, 0, array('a', 'b'));
array_splice($array, -1, 0, 'c');
array_splice($array, 9, 0, 'e');
var_dump($array);
echo "\n";
echo "\n";
//Работа с array_keys, array_values, array_combine:
echo 'Работа с array_keys, array_values, array_combine', "\n";
$array = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($array);
var_dump($keys);
$values = array_values($array);
var_dump($values);
$array = array_combine($keys, $values);
var_dump($array);
echo "\n";
echo "\n";
//Работа с array_flip, array_reverse:
echo 'Работа с array_flip, array_reverse', "\n";
$array = ['a' => 1, 'b' => 2, 'c' => 3];
$arrayFlip = array_flip($array);
var_dump($arrayFlip);
$array = [1, 2, 3, 4, 5];
$arrayReverse = array_reverse($array);
var_dump($arrayReverse);
echo "\n";
echo "\n";
//Работа с array_search:
echo 'Работа с array_search', "\n";
$array = ['a', '-', 'b', '-', 'c', '-', 'd'];
$key = array_search('-', $array);
array_splice($array, $key, 1);
var_dump($array);
echo "\n";
echo "\n";
//Работа с array_replace:
echo 'Работа с array_replace', "\n";
$array = ['a', 'b', 'c', 'd', 'e'];
$arrayReplace = ['!', 3 => '!!'];
$array = array_replace($array, $arrayReplace);
var_dump($array);
echo "\n";
echo "\n";
//Работа с сортировкой:
echo 'Работа с сортировкой', "\n";
$array = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
asort($array);
var_dump($array);
arsort($array);
var_dump($array);
ksort($array);
var_dump($array);
krsort($array);
var_dump($array);
sort($array);
var_dump($array);
rsort($array);
var_dump($array);
echo "\n";
echo "\n";
//Работа с array_rand:
echo 'Работа с array_rand', "\n";
$array = ['a'=>1, 'b'=>2, 'c'=>3];
$randKeys = array_rand($array);
echo $randKeys, "\n";
echo $array[$randKeys];
echo "\n";
echo "\n";
//Работа с shuffle:
echo 'Работа с shuffle', "\n";
$arr = [1, 2, 3, 4, 5];
shuffle($arr);
var_dump($arr);
$arr = range(1, 25);
shuffle($arr);
var_dump($arr);
$arr = range('a', 'z');
shuffle($arr);
// shuffle($arr = range('a', 'z'));
var_dump($arr);
$arr = range('a', 'f');
shuffle($arr);
echo implode($arr);
echo "\n";
echo "\n";
//Работа с array_unique:
echo 'Работа с array_unique', "\n";
$array = ['a', 'b', 'c', 'b', 'a'];
$array = array_unique($array);
var_dump($array);
echo "\n";
echo "\n";
//Работа с array_shift, array_pop, array_unshift, array_push:
echo 'Работа с array_shift, array_pop, array_unshift, array_push', "\n";
$array = [1, 2, 3, 4, 5];
var_dump(array_shift($array));
var_dump(array_pop($array));
var_dump($array);
$array = [1, 2, 3, 4, 5];
array_unshift($array, 0);
array_push($array, 6);
var_dump($array);
$array = [1, 2, 3, 4, 5, 6, 7, 8];
$str = '';
while (count($array) != 0) {
    $str .= array_shift($array) . array_pop($array);
}
echo $str;
echo "\n";
echo "\n";
//Работа с array_pad, array_fill, array_fill_keys, array_chunk:
echo 'Работа с array_pad, array_fill, array_fill_keys, array_chunk', "\n";
$array = ['a', 'b', 'c'];
$arrayResult = array_pad($array, 6, '-');
var_dump($arrayResult);
$array = array_fill(0, 10, 'x');
var_dump($array);
$array = range(1, 20);
var_dump(array_chunk($array, 5, true));
echo "\n";
echo "\n";
//Работа с array_count_values:
echo 'Работа с array_count_values', "\n";
$array = ['a', 'b', 'c', 'b', 'a'];
var_dump(array_count_values($array));
echo "\n";
echo "\n";
//Работа с array_map:
echo 'Работа с array_map', "\n";
$array = [1, 2, 3, 4, 5];
var_dump(array_map('sqrt', $array));
$array = [' a ', ' b ', ' с '];
$result = array_map('trim', $array);
var_dump($result);
echo "\n";
echo "\n";
//Работа с array_intersect, array_diff:
echo 'Работа с array_intersect, array_diff', "\n";
$arrayOne = [1, 2, 3, 4, 5];
$arrayTwo = [3, 4, 5, 6, 7];
$resultPlus = array_intersect($arrayOne, $arrayTwo);
var_dump($resultPlus);
$resultMinus = array_merge(array_diff($arrayOne, $arrayTwo), array_diff($arrayTwo, $arrayOne));
var_dump($resultMinus);
echo "\n";
echo "\n";
//Доп задачи:
echo 'Доп задачи', "\n";
$str = '1234567890';
$array = str_split($str);
$summ = array_sum($array);
echo $summ, "\n";
$keys = range('a', 'z');
$values = range(1, 26);
$array = array_combine($keys, $values);
var_dump($array);
$array = range(1, 9);
$array = array_chunk($array, 3);
var_dump($array);
//??
$array = [1, 2, 4, 5, 5];
rsort($array);
foreach ($array as $key => $value) {
    $lastKey = $key - 1;
    if ($value < $array[$lastKey]) {
        echo "$value" . " - это второе по размеру число";
        break;
    }
}
//??