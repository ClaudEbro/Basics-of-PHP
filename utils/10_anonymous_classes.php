<?php

$myClass = new class() {
    private $prop;

    public function __construct($prop)
    {
        $this->prop = $prop;
    }
    
    public function print() {
        print_r('test');
    }
};

$myClass->print();