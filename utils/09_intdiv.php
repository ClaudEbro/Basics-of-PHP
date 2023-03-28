<?php


$int = PHP_INT_MAX; 

//Display the number
echo ('The number : ' .$int) . "\n\n";

//Divide the number by 2
echo ('The number divided by 2 : '.$int/2) . "\n\n";

//Return the integer
echo ('Return the integer : '.(int) ($int/2)) . "\n\n";

//Round the result
echo ('Round the result : ' .floor($int/2)) . "\n\n";

// intdiv, it used to divide long integer with a precise result.
echo ('Result with intdiv : ' .intdiv($int, 2)) . "\n\n";