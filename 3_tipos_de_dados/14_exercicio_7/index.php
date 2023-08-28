<?php

    echo "Olá usuário!";
    $desc = [
        "tipo"=>"carro", 
        "cor"=>"branco", 
        "formato"=>"sedan", 
        "motor"=>"1.6"
    ];
    echo "<br>";

    print_r($desc["tipo"]);
    echo "<br>";
    $tipo = $desc["tipo"];

    print_r($desc["formato"]);
    echo "<br>";
    $formato = $desc["formato"];

    echo "Comprei um $tipo do formato $formato";
