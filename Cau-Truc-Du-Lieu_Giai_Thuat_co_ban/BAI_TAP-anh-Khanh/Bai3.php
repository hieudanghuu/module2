<?php
function isFA($queue1, $queue2)
{
    while (!$queue1->isEmpty() && !$queue2->isEmpty()) {
        var_dump ($queue1->shift());
        echo ($queue2->shift()."<br>");
    }

    return !$queue1->isEmpty() || !$queue2->isEmpty();
}

$male = new SplQueue();
$male->push('A');
$male->push('B');
$male->push('C');
$male->push('D');

$female = new SplQueue();
$female->push('A1');
$female->push('B1');
$female->push('C1');
$female->push('D1');
$female->push('E1');
$female->push('F1');
var_dump (isFA($male, $female));
