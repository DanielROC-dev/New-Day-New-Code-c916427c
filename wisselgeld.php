<?php

$values = array(
    $fifthy = 50,
    $twintig = 20,
    $ten = 10,
    $five = 5,
    $two = 2,
    $one = 1
);

$input = $argv[1];
$inputRounded = intval($input);
if(!$inputRounded == 0) {
foreach($values as $values2){
    $amountOfx = floor($inputRounded / $values2);
    echo "$amountOfx x $values2" . PHP_EOL;
    $minus = $amountOfx * $values2;
    $inputRounded = $inputRounded - $minus;
}
} else {
    exit("> geen wisselgeld.");
}

//floor rekent naar beneden dus je kan vanaf hoog naar beneden werken met de command en dan gewoon het er weer aftrekken
//foreach
