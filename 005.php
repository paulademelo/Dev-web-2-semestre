<?php
/*
Escreva um script que imprima qual o maior número.
Use IF .. ELSE
*/
$a = 10;
$b = 100;
$c = 40;

if (($a > $b) and ($a > $c)) {
    echo("O maior valor é a letra A com valor de: ");
    echo($a);
} elseif (($b > $a) and ($b > $c)) {
    echo("O maior valor é a letra B com valor de: ");
    echo($b);   
} elseif (($c > $a) && ($c > $b)) {
    echo("O maior valor é a letra C com valor de: ");
    echo($c); 
};
?>