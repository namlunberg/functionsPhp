<?php
header("Content-Type: text/plain");

function arrayFill(string $value, int $count): array {
    $result = array_fill(0, $count, $value);

    return $result;
}

var_dump(arrayFill('x', 5));


$result = 0;

function arrayToSimple(array $array): void {
    global $result;
    

    foreach ($array as $value) {

        if (is_array($value)) {

            arrayToSimple($value);

        } else {
            $result += $value;
        }

    }

    

}

$variable = [];
$variable[] = [[1, 2, 3], [4, 5], [6]];
$variable[] = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
$variable[] = [1, [2, 3, [4, 5], 6], 7, 8];

foreach ($variable as $key => $value) {
    $result = 0;
    arrayToSimple($value);
    echo $result.PHP_EOL;
}

function rangeAndChunk(int $fraction, int $length): array {

    $result = range(1, $length);
    $result = array_chunk($result, $fraction);
    return $result;

}

var_dump(rangeAndChunk(3, 9));


function isNumberInRange(int $number): bool {
    if (($number > 0 ) and ($number < 10)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

var_dump(isNumberInRange(3));



function isNumberInShow(array $arr): array {

    $result = [];
    
    foreach ($arr as $value) {

        if (isNumberInRange($value)) {

            $result[] = $value;

        }

    }

    return $result;
}

$array = [-13, -2, -7, 0, 4, 3, 22, 2, -6, 7, 14, 8, 10, 22, 1, -5];
var_dump(isNumberInShow($array));



function getDigitsSum(int $number): int {

    $result = str_split($number);

    $result = array_sum($result);

    return $result;
}

$num = 1234;

var_dump(getDigitsSum($num));

$years = range(1, 2021);

foreach ($years as $value) {

    if (getDigitsSum($value) === 13) {
        echo $value, "\n";
    }

}

function getDivisors(int $number):array {

    $result = [];

    for ($devisor = 1; $devisor < $number; $devisor++){
        if (($number % $devisor)  === 0) {
            $result[] = $devisor;
        }
    }

    return $result;
}

var_dump(getDivisors(50));

function getCommonDivisors(int $numberOne, int $numberTwo): array {

    $arrayOne = getDivisors($numberOne);
    $arrayTwo = getDivisors($numberTwo);

    $result = array_intersect($arrayOne, $arrayTwo);
    return $result;
}

var_dump(getCommonDivisors(50, 100));



function foo(int $start, int $end):array 
{
    $result = [];
    for ($i = $start; $i <= $end; $i++) {

        $divisors = getDivisors($i);
        $divisorsSum = array_sum($divisors);

        if ($divisorsSum !== 1) {
            $result[$i] = $divisorsSum;
        }
        
    }
    return $result;
}

function foo2(array $array): array
{
    $r = [];
    foreach ($array as $key => $value) {
        // строчки isset и unset нечего не дают?
        if (isset($array[$value]) && $array[$value] === $key) {
            $r[] = $key . ' - '. $value;
            unset($array[$value]);
            print_r($array);
        }
        // строчки isset и unset нечего не дают?
    }

    return $r;
}


$all = foo(1, 10000);


print_r(foo2($all));



function cut(string $string, int $cut = 10): string {
    $result = substr($string, 0, $cut);
    return $result;
}

var_dump(cut('aaabbbcccdddeee'));

$result = '';

function arrayOut(array $array, int $pos = 0): string {
    $finish = count($array);
    global $result;

    if ($pos < $finish) {
        $peace = array_slice($array, $pos, 1);
        $pos++;
        $peace = current($peace);
        $result .= "$peace" . "\n";
        return arrayOut($array, $pos);
    } else {
        return $result;
    }    
}



$array = range(1, 10);
echo arrayOut($array);

echo "\n", "\n";

function betweenZeroAndNine(int $number):int {
    $peace = str_split($number, 1);
    $sum = array_sum($peace);
    if ($sum > 9) {
        return betweenZeroAndNine($sum);
    } else {
        return $sum;
    }
}

$result = betweenZeroAndNine(123456789);
echo $result;