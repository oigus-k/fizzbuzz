<?php

require_once 'src/stdio.php';

class StdioTest extends PHPUnit_Framework_TestCase
{
    public function testNumIsNegativeValue(){
        $num = [-1, -3, -5, -15];
        $stdio = new Stdio();
        for($i=0; $i<count($num); $i++){
            $this->assertFalse($stdio->validateNum($num[$i]));
        }
    }

    public function testNumIsStrValue(){
        $num = ["1", "-3", "あ", "５"];
        $stdio = new Stdio();
        for($i=0; $i<count($num); $i++){
            $this->assertFalse($stdio->validateNum($num[$i]));
        }
    }
}
