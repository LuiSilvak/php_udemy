<?php

echo "Olá usuário" . "<br>";

$a = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$i = 0;

while ($i < count($a)) {
    if($a[$i] == 30 || $a[$i] == 40){
        $i++;
        continue;
    }
    echo "Dados: $a[$i]" . "<br>";
    $i++;
}