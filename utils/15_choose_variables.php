<?php
    $hello = "Hello";
    $name = "Claude";
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

    <?php echo $hello; ?> <?php echo $name; ?> !

    <?php 
        $name = "Francesco";
    ?>

    <?php echo $hello; ?> <?php echo $name; ?> !

</body>
</html>