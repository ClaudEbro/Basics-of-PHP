<?php

echo "--- Global function ---\n";
$displayInformation = function($name) {
    echo sprintf("Hello %s!\n", $name);
};
$displayInformation("Claude");


// You can declare the paramter out the function and implement it with "use" or "&".
echo "--- Function with parameter out the function---\n";
$name = "Claudio";
$displayInformation = function() use (&$name) {
    echo sprintf("Hello %s!", $name);
};

$name = "Arnaud";
$displayInformation();