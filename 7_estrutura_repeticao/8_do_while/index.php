<?php

$x = 0;
$teste = "luis";

do {
    echo "Contador:$x" . "<br>";
    $x++;

    if ($x == 4){
        echo "$teste contador:$x" . "<br>";
        continue;
    }

    
} while ($x < 10);

$y = 10;

do {
    
    echo "Decrementando de 2 em 2: $x" . "<br>";
    $x = $x - 2;
} while ($x >= 0);