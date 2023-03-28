<?php

//Put the type on the function result to ensure the return type

function sum ($a, $b) : int {
    $result = $a + $b;

    return $result;
}

echo(gettype(sum(1, 2))) . "\n";
echo(gettype(sum("1", "2"))) . "\n";
echo(gettype(sum(1.0, 2.0))) . "\n";