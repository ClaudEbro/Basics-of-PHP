<?php

$var = 2;

switch (true) {
    case $var == 1;
        echo "var equal 1\n";
        break;

    case $var == 2;
        echo "var equal 2\n";
        break;
    default :
        echo "Default";
}

//You can also use cases like this:
$var = 2;

$varEqualOne = 1 == $var;
$varEqualTwo = 2 == $var;

switch (true) {
    case $varEqualOne :
        echo "var : 1\n";
        break;

    case $varEqualTwo :
        echo "var : 2\n";
        break;
    default :
        echo "Default";
}