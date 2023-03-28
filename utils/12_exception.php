<?php

//Now, we can catch exception directly by "Error" and continue running your script.
function start($application) {
    return $application -> run();
}

try {
    echo start(null);
} catch (Error $e) {
    echo $e; //you can comment this line to move to 'echo "GO"'.
}

echo "GO";