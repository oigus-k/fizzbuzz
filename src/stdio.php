<?php

require_once 'fizzbuzz.php';

class Stdio {
    
    public function inputNum() {
        $input = intval(fgets(STDIN, 4096));
        if($this->validateNum($input)){
            return $input;
        }
        return exit(1);
    }

    public function validateNum($input) {
        if(is_int($input) && !preg_match('/^-/', $input)){
            return $input;
        }
        return false;
    }

    public function dispResult() {
        $input = $this->inputNum();
        for($i=1; $i<=$input; $i++){
            $fizzbuzz = new FizzBuzz();
            $result = $fizzbuzz->judgeFizzBuzz($i);
            echo $result . PHP_EOL;
        }
    }
}
