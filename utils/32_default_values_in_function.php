<?php

//You can declare a parameter without use it like $number or $var.
function displayInformation($text, $number=null, $var=null) {
    $text = strtoupper($text);

    echo sprintf("%s \n", $number);
    echo sprintf("%s \n", $var);
    echo sprintf("%s \n", $text);
}

displayInformation('Hello',50);
displayInformation('Claudio');