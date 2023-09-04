<?php

    function teste() {

        $a = 0;
        $a++;

        echo "$a";
        echo "<br>";

    }

    teste();
    teste();
    teste();

    function testando_teste() {

        static $a = 0;
        $a++;

        echo "$a";
        echo "<br>";

    }

    testando_teste();
    testando_teste();
    testando_teste();