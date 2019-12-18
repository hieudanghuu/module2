<?php
function reverseArray($arr)
{
    if (empty($arr)) {
        return [];
    }

    if (count($arr) === 1) {
        return $arr;
    }

    $stack = new SplStack();
    foreach ($arr as $item) {
        $stack->push($item);
    }

    $arrResult = [];
    while (count($stack) > 0) {
        array_push($arrResult, $stack->pop());
    }
    return $arrResult;
}

$arr = [1, 2, 3, 4, 5];
var_dump(reverseArray($arr));
