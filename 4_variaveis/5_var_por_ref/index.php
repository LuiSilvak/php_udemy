<?php

    echo "Olá usuário";
    echo "<br>";

    $x = 3;
    
    $y =& $x;
    echo "$x <br>";
    echo "$y <br>";

    $y = 5;
    echo "$y <br>";
    echo "$x <br>";


    $nome = "André <br>";

    $nome2 =& $nome;

    echo "$nome <br>";
    echo "$nome2 <br>";

    $nome2 = "Luís";

    echo "$nome2 <br>";
    echo "$nome <br>";


