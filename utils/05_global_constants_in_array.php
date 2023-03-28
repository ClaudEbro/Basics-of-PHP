<?php

//Historic way to define constants
define('VERSION', 1.1);

//Recently we can define constants by "const" in your classes.
const VERSION = 1.1;

//Most recently we can define a constant as an array, also in your classes.
const VERSION = array('plop' => 1, 'test' => 0);

//With PHP7 we can define global constant by "define" and use it.
define('VERSION', array('plop' => 1));