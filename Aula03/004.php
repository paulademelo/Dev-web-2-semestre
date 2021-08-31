<?php
/*
Escreva um script que imprima qual o maior número.
Use IF
*/
$a = 10;
$b = 1;
$c = 40;

if(($a > $b) and ($a > $c)){
        echo("O maior valor é a letra A com valor de: ");
        echo($a);
}
if(($b > $a) and ($b > $c)){
    echo("O maior valor é a letra B com valor de: ");
    echo($b);   
}if(($c > $a) && ($c > $b)){
    echo("O maior valor é a letra C com valor de: ");
    echo($c); 
}else{
    echo("Erro inesperado");
}

?>