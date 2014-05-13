<?php
class FizzBuzz
{
    const FIZZ = "Fizz";
    const BUZZ = "Buzz";
    
    public function inputNum() {
        $input = fgets(STDIN, 4096);
        return $input;
    }

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

    public function dispResult() {
        $input = $this->inputNum();
        for($i=1; $i<=$input; $i++){
            $result = $this->judgeFizzBuzz($i);
            echo $result . "\n";
        }
    }
}

$fizzbuzz = new FizzBuzz();
$fizzbuzz->dispResult();

