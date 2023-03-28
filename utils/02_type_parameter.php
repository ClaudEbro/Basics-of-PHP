<?php

//Put types on function parameters

declare(strict_types=1); //this function guarantee the types you will use

function run (int $a, int $b) {
    $result = $a + $b;
    echo gettype($a) . "\n";
    echo gettype($a) . "\n";

    echo gettype($result) . "\n\n";
}

run(1,2);
run("1","2");
run(1.0, 2.0);