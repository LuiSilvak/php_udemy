<?php

    $teste = "asd";

    echo "Variável Global 1: $teste";
    echo "<br>";

    if (5 > 2) {

        $teste = "dsa";

        echo "Variável Transição: $teste";
        echo "<br>";
    }

    echo "Variiável Global 2: $teste";
    echo "<br>";


    function funcao() {

        $teste = "Testando";
        
        echo "Variável Local: $teste";
        echo "<br>";

    }

    funcao();
    echo "<br>";

    function testando() {

        global $teste; 

        $teste = 5;

        echo "Variável Global: $teste";

    }

    testando();
    echo "<br>";

    echo "Variável Global: $teste";