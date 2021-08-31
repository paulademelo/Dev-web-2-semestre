<?php
/*
Crie uma função que demonstre 
 - Passagem por valor.
 - Passagem por referência.

 
*/

function passagem_valor($variavel, $valor){
    $variavel += $valor;
}
function passagem_referencia(&$variavel, $valor=10){
    $variavel += $valor;
}

$variavel_1 = 5;

passagem_valor($variavel_1, 20);
echo "Passagem de valor: ", $variavel_1.PHP_EOL;

passagem_referencia($valor, 20);
echo "Passagem por referência: ", $variavel_1
?>