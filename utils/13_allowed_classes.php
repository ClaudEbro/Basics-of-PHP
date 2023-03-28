<?php

class User {
    public $name = 'Raoul';
}

class Admin extends User {
    public $power = true;
}

$user = new User();
$serialized = serialize($user);

echo $serialized . "\n";

//Modify the data
$serialized = str_replace('4:"User', '5:"Admin', $serialized);

//Specify what you don't allow changes in order to securize your app.
$option = array('allowed_classes' => array('User'));

//unserialize the object and display it
$object = unserialize($serialized, $option);

echo get_class($object) . "\n";

