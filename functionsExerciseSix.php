<?php
header("Content-Type: text/plain");
function summ(int $param_1, int $param_2): bool {

    $result = (($param_1 === $param_2) ? true : false);

    return $result;
}

var_dump(summ(3, 2));

function plus(int $param): bool {

    $result = (($param >= 0) ? true : false);
    
    return $result;
}

var_dump(plus(1));

function massFound(array $arr): string {

    $result = ((in_array(5, $arr)) ? 'да' : 'нет');

    return $result;
}

$array = [1, 2, 3, 4, 5, 6, 7, 5];

echo massFound($array), "\n";

function onePiece(int $param): bool {
    
    $result = false;

    $arr = range(2, ($param - 1));
    foreach ($arr as $value) {

        if (($param % $value) === 0) {
            $result = true;
            break;
        }
    }
    return $result;
}

var_dump(onePiece(30));

function together(array $arr): bool {

    $result = false;

    foreach ($arr as $key => $value) {
        $past = $key - 1;
        if ($arr[$key] === $arr[$past]) {
            $result = true;
        }
    }

    return $result;
}

$array = [1, 2, 3, 3, 4, 5];

var_dump(together($array));