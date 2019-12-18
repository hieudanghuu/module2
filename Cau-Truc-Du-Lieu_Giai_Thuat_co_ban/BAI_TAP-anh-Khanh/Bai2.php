<?php
function isPalindrome($str)
{
    if (empty($str) || strlen($str) === 1) {
        return true;
    }

    $queue = new SplQueue();
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        $queue->push($str[$i]);
    }

    $reverString = '';

    while (!$queue->isEmpty()) {
        $reverString .= $queue->pop();
    }
    var_dump($reverString);
    return $str === $reverString;
}

$str = 'HelileH';

 var_dump(isPalindrome($str));
