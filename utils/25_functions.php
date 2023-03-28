<?php

// You can also call the function before.
echo "--- Function with parameter ---\n";
function sayHello () {
    echo sprintf("Hello !\n");
}
sayHello();

//Function with parameter
echo "--- Function with parameter ---\n";
//You declare a parameter without use it like $number
function displayInformation($text, $number, $var) {
    $text = strtoupper($text);
    echo sprintf("%s \n", $text);
}

displayInformation('Hello !');
displayInformation('Claudio');