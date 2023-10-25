<?php

    echo "Olá usuário" . "<br>";

    $x = 7;
    $y = 3;

    # Condição Verdadeira
    if ($x > $y) {
        echo "A variável com valor $x é maior que a variável com valor $y" . "<br>";
    }

    # Condição Falsa
    if ($x < $y) {
        echo "Condição Falsa. Não irá entrar no IF" . "<br>";
    }

    # Utilizando Operações Lógicas

    if (5 == 5 || 10 < 3) {
        echo "Condição vai passar, pois o operador OU (||) precisa de duas lógicas falsas para não passar" . "<br>";
    }