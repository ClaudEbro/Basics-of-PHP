<?php

/*function compare ($a, $b) {
    $result = $a <=> $b; //spaceship operator

    switch ($result) {
        case -1:
            echo 'left smaller' . "\n";
            break;
        case -0:
            echo 'idenctical' . "\n";
            break;
        case 1:
            echo 'left bigger' . "\n";
            break;
    }
}

echo compare(1, 2);
echo compare(2, 2);
echo compare(2, 1);*/


//Sort a tbale

$entries = array(
    array('name' => 'titi', 'price' => 10),
    array('name' => 'toto', 'price' => 100),
    array('name' => 'tata', 'price' => 50)
);

function sortByPrice($one, $two) {
    return $one['price'] <=> $two['price'];
}

usort($entries, 'sortByPrice');

var_dump($entries);
