<?php
header("Content-Type: text/plain");

function arrayFill(string $value, int $count): array {
    $result = array_fill(0, $count, $value);

    return $result;
}

var_dump(arrayFill('x', 5));