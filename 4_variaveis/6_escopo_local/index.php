<?php

    $x = 10;

    echo "Variável Global: x = $x";
    echo "<br>";

    function teste() {

        $x = 5;

        echo "Variável Local: x = $x";
        echo "<br>";

    }

    teste();

    echo "Variável Global: x = $x";
    echo "<br>";

    teste();

    function testando () {

        $x = 20;
        
        echo "Variável Local 2: x = $x";
        echo "<br>";

    }

    testando();