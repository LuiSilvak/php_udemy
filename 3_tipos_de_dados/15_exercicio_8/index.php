<?php

    echo "Olá usuário";
    echo "<br>";

    $pessoa = [
        "nome"=>'Luís',
        "idade"=>'28',
        "altura"=>'1.7',
        "peso"=>'55',
        "profissão"=>'Programador'
    ];

    $nome = $pessoa["nome"];
    $idade = $pessoa["idade"];
    $profissao = $pessoa["profissão"];

    echo "Olá, eu sou o $nome, tenho $idade anos e sou $profissao";
    echo "<br>";

    if ($idade >= 18){
        echo "Você é maior de idade, pode passar";
    }
    else {
        echo "Você é menor de idade, está impedido de passar";
    }