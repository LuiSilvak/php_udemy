<?php

    echo "Olá usuário" . "<br>";

# Operador AND &&    
    $x = 6                      ;
    $y = 7;

    # FALSE && FALSE
    if ($y < $x && $x == $y) {
        echo "Falso" . "<br>"; 
    }

    # FALSE && TRUE
    if (($x === $y) && ($x !== $y)) {
        echo "Falso" . "<br>";
    }

    # TRUE && FALSE
    if (($x <= $y) && ($x === $y)) {
        echo "Falso" . "<br>";
    }

    # TRUE && TRUE
    if (($x <= $y) && ($y >= $x)) {
        echo "Verdadeiro" . "<br>";
    }