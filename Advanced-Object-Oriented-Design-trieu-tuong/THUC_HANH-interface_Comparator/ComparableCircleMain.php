<?php

include_once("ComparableCircle.php");

$circleOne = new ComparableCircle("circleOne",8);
$circleTow = new ComparableCircle("circleTow",2);
var_dump($circleOne->comparato($circleTow));