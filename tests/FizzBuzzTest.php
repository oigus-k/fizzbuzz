<?php

require_once 'src/fizzbuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    const FIZZ = "Fizz";
    const BUZZ = "Buzz";

    public function testNumIs3(){
        $num = 3;
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals(self::FIZZ, $fizzbuzz->judgeFizzBuzz($num));
    }

    public function testNumIs5(){
        $num = 5;
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals(self::BUZZ, $fizzbuzz->judgeFizzBuzz($num));
    }
    public function testNumIs15(){
        $num = 15;
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals(self::FIZZ . self::BUZZ, $fizzbuzz->judgeFizzBuzz($num));
    }
}
