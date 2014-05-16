<?php

require_once 'src/fizzbuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    const FIZZ = "Fizz";
    const BUZZ = "Buzz";

    public function testNumIsFizzValue(){
        $num = [3, 6, 9, 12, 18, 21, 24, 27, 33, 36];
        $fizzbuzz = new FizzBuzz();
        for($i=0; $i<count($num); $i++){
            $this->assertEquals(self::FIZZ, $fizzbuzz->judgeFizzBuzz($num[$i]));
        }
    }

    public function testNumIsBuzzValue(){
        $num = [5, 10, 20, 25, 35, 40, 50, 55, 65, 70];
        $fizzbuzz = new FizzBuzz();
        for($i=0; $i<count($num); $i++){
            $this->assertEquals(self::BUZZ, $fizzbuzz->judgeFizzBuzz($num[$i]));
        }
    }
    
    public function testNumIsFizzBuzzValue(){
        $num = [15, 30, 45, 60, 75, 90, 105, 120, 135, 150];
        $fizzbuzz = new FizzBuzz();
        for($i=0; $i<count($num); $i++){
            $this->assertEquals(self::FIZZ . self::BUZZ, $fizzbuzz->judgeFizzBuzz($num[$i]));
        }
    }

    public function testNumIsNaturalValue(){
        $num = [1, 2, 4, 7, 8, 11, 13, 14, 16, 17];
        $fizzbuzz = new FizzBuzz();
        for($i=0; $i<count($num); $i++){
            $this->assertEquals($num[$i], $fizzbuzz->judgeFizzBuzz($num[$i]));
        }
    }
}
