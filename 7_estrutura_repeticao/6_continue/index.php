<?php

    echo "Olá usuário" . "<br>";

$i = 10;

while ($i > 0) {

    if ($i == 3 || $i == 5){
        echo "Pulando a execução $i" . "<br>";

        $i--;

        continue;
    }

    if ($i == 2){
        echo "Terminando a execução com o break $i" . "<br>";

        break;
    }

    echo "Executando o loop: $i" . "<br>";

    $i--;
}