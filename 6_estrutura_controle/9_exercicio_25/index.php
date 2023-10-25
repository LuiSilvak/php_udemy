<?php

    echo "Olá usuário" . "<br>";

    $x = 3;
    $y = 5;
    $z = 85;
    $nome1 = "Luís";
    $nome2 = "Silva";

    if (is_numeric($z)) {
        $mult = $z * 2;

        if ($mult > 100) {
            echo "Este número é maior que 100";
        }
        else {
            echo "Este número é menor que 100";
        }
    }
    else {
        echo "Não é número!";
    }