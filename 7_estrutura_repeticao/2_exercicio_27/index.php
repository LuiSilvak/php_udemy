<?php

    echo "Olá usuário" . "<br>";
    
    $arr = [5, "Luís", True, 3.7, 10, "Silva", False, 9.4, [], 0];
    $x = count($arr);
    $y = 0;

    while ($y < $x) {
        if (is_string($arr[$y])) {
            echo $arr[$y] . "<br>";
        }

        $y++;

    }