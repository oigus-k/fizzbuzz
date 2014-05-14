<?php

class FizzBuzz {
    const FIZZ = "Fizz";
    const BUZZ = "Buzz";

    public function judgeFizzBuzz($num) {
        $data = [];
        if($num%3 == 0){
            $data[] = self::FIZZ;
        }
        if($num%5 == 0){
            $data[] = self::BUZZ;
        }
        if(empty($data)){
            return $num;
        }
        return implode("", $data);
    }
}
