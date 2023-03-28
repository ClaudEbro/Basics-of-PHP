<?php

//simple foreach

echo "--- Simple foreach ---\n";
$arr = ['Orange', 'Apple', 'Lemon'];

foreach($arr as $item) {
    echo sprintf("%s \n",$item);
}

//assign reference
echo "--- Assign reference ---\n";
$arr = ['Orange', 'Apple', 'Lemon'];

foreach($arr as &$item) {
    echo sprintf("%s \n",$item);
    $item = 'Mango';
}
var_dump($arr);


//assign reference on key
echo "--- Assign reference on key ---\n";
$arr = ['Orange', 'Apple', 'Lemon'];

foreach($arr as $index => $item) {
    echo sprintf("%s : %s\n",$index, $item);
    //$arr[$index] = 'Mango', to replace all values
}
$arr[0] = 'Mango'; //to replace the value of the first index
var_dump($arr);
