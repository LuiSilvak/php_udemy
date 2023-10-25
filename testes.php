<?php

echo "Olá usuário" . "<br>";

function calcularDesconto($prod, $cat) {
    $desc = 0;
    switch ($cat) {
        case 'eletrônicos':
            $prod = $prod - ($prod * 0.1);
            echo "O valor com desconto é igual a: R$$prod" . "<br>";
            break;
        case 'vestuário':
            $prod = $prod - ($prod * 0.2);
            echo "O valor com desconto é igual a: R$$prod" . "<br>";
            break;
        case 'alimentos':
            $prod = $prod - ($prod * 0.05);
            echo "O valor com desconto é igual a: R$$prod" . "<br>";
            break;
        default:
            echo "Nenhum desconto" . "<br>";
            break;
    }
}
calcularDesconto(50, 'eletrônicos');
calcularDesconto(50, 'vestuário');
calcularDesconto(50, 'alimentos');
calcularDesconto(50, 'limpeza');