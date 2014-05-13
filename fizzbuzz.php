<?php
class FizzBuzz
{
    public function inputNum() {
        $input = fgets(STDIN, 4096);
        return $input;
    }

    public function judgeFizzBuzz($num) {
        $result = [];
        if($num%3 == 0){
            $result[] = "Fizz";
        }
        if($num%5 == 0){
            $result[] = "Buzz";
        }
        if(!in_array("Fizz", $result) && !in_array("Buzz", $result)){
            $result[] = $num;
        }
        if(in_array("Fizz", $result) && in_array("Buzz", $result)){
            return "FizzBuzz";
        } else {return $result[0];}
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
?>
