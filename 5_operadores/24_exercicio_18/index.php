<?php

    echo "Olá usuário" . "<br>";

    # Primeira Expressão
    $a = 12 < 5;
    $b = "João" === "João";

    if ($a || $b) {
        echo "Condição IF1 aprovada!" . "<br>";
    }

    # Segunda Expressão
    $c = 1 > 5;
    $d = 1;

    if ($c || $d) {
        echo "Condição IF2 aprovada!" . "<br>";
    }

    # Terceira Expressão
    $e = 20 === "20";
    $f = 51 >= 31;

    if ($e && $f) {
        echo "Condição IF3 aprovada!" . "<br>";
    }