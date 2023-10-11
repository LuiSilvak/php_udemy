<?php

    echo "Olá usuário" . "<br>";

    $a = 5;
    $b = "5";
    $c = 12;
    $d = 12;
    
    if ($a != $b) {
        echo "A é diferente de B" . "<br>";
    }

    if ($a !== $b) {
        echo "A não é idêntico a B" . "<br>";
    }

    if ($c !== $d) {
        echo "São idênticos" . "<br>";
    }