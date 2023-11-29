<?php

    echo "Olá usuário" . "<br>";

    $x = 0;

    while ($x < 10) {
        echo $x . "<br>";

        if($x === 5) {
            echo "Terminando a contagem" . "<br>";
            break;
        }

        $x++;
    }

    echo "Saindo do Loop";