<?php
/*
Variáveis 
*/

$variavel_1 = 'texto';
// Imprimir o valor a variável e o seu tipo
echo($variavel_1).'<br>'.PHP_EOL;
echo gettype($variavel_1).'<br>'.PHP_EOL;;

$variavel_2 = 123;
// Imprimir o valor a variável e o seu tipo
echo($variavel_2).'<br>'.PHP_EOL;;
echo gettype($variavel_2).'<br>'.PHP_EOL;;

$variavel_3 = 1;
// Imprimir o valor a variável e o seu tipo
echo($variavel_3).'<br>'.PHP_EOL;;
echo($variavel_3).'<br>'.PHP_EOL;;

$array = [
    "foo" => "bar",
    "bar" => "foo",
];
// Imprimir o valor a variável e o seu tipo
var_dump($array).'<br>'.PHP_EOL;
echo gettype($array).'<br>'.PHP_EOL;

?>
