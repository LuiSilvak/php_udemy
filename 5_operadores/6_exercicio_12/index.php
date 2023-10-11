<?php

    echo "Olá usuário" . "<br>";

    $x = 2;
    $y = 4;
    
    //Operações aritméticas
    $som = $x + $y;
    echo $som . "<br>";

    $sub = $y - $x;
    echo $sub . "<br>";

    $mul = $x * $y;
    echo $mul . "<br>";

    $div = $y / $x;
    echo $div . "<br>";

    $op = (($som + $sub) * ($som - $sub)) / (($mul + $div) * ($mul - $div)) ;

    echo $op . "<br>";