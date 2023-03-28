<?php
    $name = "Claude";
    $hello = "Hello $name"; // You can insert a variable in an other variable only with double quotes.
    $hello = sprintf("Hello %s!", $name);// sprintf, used to manipulate strings or chars.

    $number1 = 5;
    $number2 = 10;
    echo $number1 + $number2;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP Page</title>
</head>
<body>

<h1>My first PHP page</h1>

    <?php echo $hello; ?>

    <?php
        $name ="Francesco";
        $hello = sprintf("Hello %s!", $name);
    ?>

    <?php echo $hello; ?>

</body>
</html>