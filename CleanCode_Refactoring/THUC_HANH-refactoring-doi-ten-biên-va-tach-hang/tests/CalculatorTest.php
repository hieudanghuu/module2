<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 24/10/2018
 * Time: 23:43
 */

require __DIR__ . "/../src/Calculator.php";
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculateAdd()
    {
        $a = 1;
        $b = 1;
        $o = '+';

        $expected = 2;

        $calculator = new Calculator();
        $result = $calculator->calculate($a, $b, $o);
        $this->assertEquals($expected, $result);
    }



}