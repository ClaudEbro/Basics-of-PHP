<?php

/*Before PHP7

class User {
    public $name;

    public function User()
    {
        $this->name = 'toto';
    }
}*/

//With PHP7

class User {
    public $name;

    public function __construct() // we use directely the name "__construct"
    {
        $this->name = 'toto';
    }
}