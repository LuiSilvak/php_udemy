<?php
# Conte de 1 a 10

    echo "Olá usuário" . "<br>";

    $i = 0;
    
    while ($i <= 10) {
        echo $i . "<br>";
        $i = $i + 1;
    }

    echo "Continuando código..." . "<br>";

    $j = 0;

    while ($j <= 20) {
        echo $j . "<br>";
        $j = $j + 2;
    }

    echo "Continuando código..." . "<br>";

    $k = 50;

    while ($k >= 0) {
        echo $k . "<br>";
        $k = $k - 2;
    }

    echo "Continuando código..." . "<br>";

    $x = 10;

    while ($x > 0) {

        if ($x % 2 != 0) {
            echo $x . "<br>";
        }
        $x--;
    }