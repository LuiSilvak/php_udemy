<?php

    echo "Olá usuário" . "<br>";

    # Usando String
    $a = "Luís";

    if (is_string($a)) {
        echo "É uma String" . "<br>";
    }
    else {
        echo "Não é uma String" . "<br>";
    }

    # Usando Int
    $b = 5.5;

    if (is_int($b)) {
        echo "É um número inteiro" . "<br>";
    }
    else {
        echo "Não é um número inteiro" . "<br>";
    }

    # Usando Boolean
    $c = 3;
    $d = 6;

    if (is_bool($d >= $d)) {
        echo "É um booleano verdadeiro!" . "<br>";
    }
    else {
        echo "É um booleano falso" . "<br>";
    }

    # Usando Array
    $e = [];

    if (is_array($e)) {
        echo "É um Array" . "<br>";
    }
    else {
        echo "Não é Array" . "<br>";
    }
