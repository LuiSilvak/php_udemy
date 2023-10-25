<?php

    echo "Olá usuário" . "<br>";

    $x = 5.5;
    $y = 2;

    if ($x >= $y) {
        echo "Acessando o primeiro IF" . "<br>";

        if (is_int($x)) {
            echo "Passou no teste";
        }
        else {
            echo "Passou no teste, mas com erros!";
        }
    }
    else {
        echo "Não passou no teste";
    }