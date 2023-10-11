<?php

    echo "Olá usuário" . "<br>";

    $exp = "5" * 12;
    echo $exp . "<br>";

    $result_type = gettype($exp);
    echo $result_type . "<br>";

    echo gettype([]) . "<br>";

    echo gettype("É uma string") . "<br>";

    echo gettype(5.2) . "<br>";

    echo gettype(true) . "<br>";
