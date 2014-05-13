<?php
class FizzBuzz
{
    public function inputNum() {
        $input = fgets(STDIN, 4096);
        return $input;
    }

    public function judgeFizzBuzz($num) {
        $strdata = [];
        if($num%3 == 0){
            $strdata[] = "Fizz";
        }
        if($num%5 == 0){
            $strdata[] = "Buzz";
        }
        if(!in_array("Fizz", $strdata) && !in_array("Buzz", $strdata)){
            $numdata = $num;
        }
        if(in_array("Fizz", $strdata) && in_array("Buzz", $strdata)){
            $strdata[] = implode("", $strdata);
        }
        if(!empty($strdata)){ return array_pop($strdata);}
        else { return $numdata; }
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
