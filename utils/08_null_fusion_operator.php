
<?php

function run ($a, $b) {
    $array = ['test' => 'plop'];
    $value = $array['plop'] ?? $b ?? 'default';

    echo $value;
}

echo run(null, 12);
echo run(3, null);
echo run(null, 25);