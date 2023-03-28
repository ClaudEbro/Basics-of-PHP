<?php

//declare an associative array which is an association of keys and values.
$arr = [
    'name' => 'Claudio',
    'age' => 37,
    'location'=> [
        'city' =>'Abidjan'
    ]
];

//display a value of the array
echo $arr['location']['city'];