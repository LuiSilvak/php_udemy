<?php

$nome = "luis";

for ($x = 0; $x <= 10; $x++) {
    echo "Testando Laço: $x" . "<br>";

    if ($x == 5) {
        echo "$nome" . "<br>";
    }

    if ($x == 6) {
        echo "Parou, parou";
        break;
    }

    
}