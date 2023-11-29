<?php

    echo "Olá usuário" . "<br>";

# Loop Externo
$i = 0;

$c = "Variável Teste";

while ($i <= 10) {
    echo "Loop Externo: $i" . "<br>";
    echo "$c" . "<br>";

    # Loop Interno
    $j = 0;

    while ($j <= 10) {
        echo "Loop Interno: $j" . "<br>";
        echo "$c" . "<br>";

        $j++;
    }

    $i++;
}