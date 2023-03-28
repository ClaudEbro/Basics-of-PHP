<?php

$var = 1;
$name = 1 == $var ? "Claude" : "Arnaud";

echo "Name : $name\n";


// With null variable

$ovar = null;
$name = $ovar ?: 'François';

echo "Name : $name\n";
