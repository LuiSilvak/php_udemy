<?php

    echo "Olá usuário";
    echo "<br>";

    $x = 5 / 2;
    echo "$x";
    echo "<br>";

    if(is_float($x)){
        echo "É um float";
        echo "<br>";
    }
    else{
        echo "Não é um float";
        echo "<br>";
    }

    $y = 5 . 5;
    echo "$y";
    echo "<br>";

    if(is_string($y)){
        echo "É uma string";
        echo "<br>";
    }
    else {
        echo "Não é uma string";
        echo "<br>";
    }

    $nome = "Luís";
    $sobrenome = "Silva";

    $NomeCompleto = $nome . " " . $sobrenome;
    echo "$NomeCompleto";




