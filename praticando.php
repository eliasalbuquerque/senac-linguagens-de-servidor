<?php

$idade = 20;
echo "Exemplo de função com passagem de parâmetros\n";
echo "Parâmetro: por valor\n";

Function modifica ($valorRecebido) {
    echo ' - Internamente (antes): ' . $valorRecebido;
    $valorRecebido = 100;
    echo ' - Internamente (depois): ' . $valorRecebido;
}

echo "\nValor da variável idade antes da chamada da função: " . $idade;
modifica($idade);
echo "\nValor da variável idade após chamada da função :" . $idade;

?>