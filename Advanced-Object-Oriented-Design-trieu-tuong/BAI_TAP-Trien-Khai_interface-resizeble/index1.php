<?php

/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');
include_once("Resizeable.php");
$num = mt_rand(1,100);

$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
echo $circle->resize($num). '<br />';
// $cylinder = new Cylinder('Cylinder 01', 3 , 4);
// echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
// echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3, 4,$num);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
echo $rectangle->resize($num)."<br />";

$square = new Square('Square 01', 4, 4, 4);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';
echo $square ->resize($num) ."<br>";



 

// function randumNum($length)
// {
//     $arr = [];
//     for ($i = 0; $i < $length; $i++) {
//         array_push($arr, mt_rand(1, 100));
//     }
//     return $arr;
// }
// $arr =  randumNum(3);
