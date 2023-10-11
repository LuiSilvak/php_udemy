<?php

    echo "Olá usuário" . "<br>";

    #Verificando a primeira condição
    $a = 15 > 5;
    $b = "João" === "João";

    if ($a && $b) {
        echo "Passou na condição IF1" . "<br>";
    }

    #Verificando a segunda condição
    $c = "teste" > 5;
    $d = 1;

    if ($c && $d) {
        echo "Passou na condição IF2" . "<br>";
    }

    #Verificando a terceira condição
    $x = 2 == 3;
    $y = 5 >= 3;

    if ($x && $y) {
        echo "Passou na condição IF3" . "<br>";
    }