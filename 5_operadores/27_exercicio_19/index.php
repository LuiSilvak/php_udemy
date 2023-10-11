<?php

    echo "Olá usuário" . "<br>";

    $a = (int) "testando";
    echo $a . "<br>";

    if ($a !== "testando") {
        echo "Teste 1 OK" . "<br>";
    }

    $b = (int) 12.9;

    if ($b === 12) {
        echo "Teste 2 OK" . "<br>";
    }

    $c = (int) true;

    if ($c === 1) {
        echo "Teste 3 OK" . "<br>";
    }

    $d = (int) [1, 2, 3];
    echo $d . "<br>";

    if ($d === [1, 2, 3]) {
        echo "Teste 4 OK" . "<br>";
    }    