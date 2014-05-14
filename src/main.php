<?php

require_once 'fizzbuzz.php';

function inputNum() {
    $input = fgets(STDIN, 4096);
    return $input;
}

function dispResult() {
    $input = inputNum();
    for($i=1; $i<=$input; $i++){
        $fizzbuzz = new FizzBuzz();
        $result = $fizzbuzz->judgeFizzBuzz($i);
        echo $result . "\n";
    }
}

dispResult();
