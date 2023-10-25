<?php

    echo "Olá usuário" . "<br>";

    $velcar = 30;
    $velperm = 40;

    if ($velcar <  $velperm) {
        echo "Velocidade correta!" . "<br>";
    } 
    else if ($velcar ==  $velperm) {
        echo "Velocidade igual a 40km/h, tome cuidado!";
    }
    else {
        echo "Excedeu o limite de velocidade, você foi multado!";
    }
