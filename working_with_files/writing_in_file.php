<?php

//Create a file.
$file = fopen("test.txt", "w") or die("Can not create this file <br>");

//Write in the file.
$text = "Hello World ! File created at ".date("j/n/y");
fwrite($file, $text);
fclose($file);

echo "Writing is done !";