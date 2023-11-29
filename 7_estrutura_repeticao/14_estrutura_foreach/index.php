<?php

    echo "Olá usuário" . "<br>";

    $arr = [1, 2, 3, 4, 5];

    foreach($arr as $num) {
        echo "O número do índice atual é $num" . "<br>";

        if ($num == 3) {
            echo "Testando Condicional IF" . "<br>";
        }
    }