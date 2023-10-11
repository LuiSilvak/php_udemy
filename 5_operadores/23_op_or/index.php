<?php

    echo "Olá usuário" . "<br>";

    # TRUE OR TRUE
    $a = 3;
    $b = 5;

    if (($b >= $a) || ($a <$b)) {
        echo "A condição IF1 é válida!" . "<br>"; 
    }

    # TRUE OR FALSE
    $c = "luis";
    $d = 4;
    
    if (($d !== $c) || ($c === $d)) {
        echo "A condição IF2 é válida!" . "<br>";
    }
    
    # FALSE OR TRUE
    $e = 8;
    $f = 9;

    if (($e > $f) || ($f != $e)) {
        echo "A condição IF3 é válida!" . "<br>";
    }

    # FALSE OR FALSE
    $g = 2;
    $h = 6;

    if (($g == $h) || ($h < $g)) {
        echo "A condição IF4 é válida!" . "<br>";
    }