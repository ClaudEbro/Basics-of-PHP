<?php

$name = 'test';
$test = 'my test';

echo $name . "\n";
echo $$name. "\n";

//Especially with PHP7, we can read the content of variables each other.

$name = 'array';
$array = array('test' => 'toto');

echo $$name['test'];

//You can use dynamic evaluation with objects to retrieve a key of a value.
//$obj->$value[$key];