<?php
/*
Escreva um script que imprima qual o maior número.
Converter variáveis strings em inteiros
Use IF
*/
$a = "10";
$b = "1";

$a = intval($a);

if($a > $b){
    echo("O maior valor é a letra a com valor de: ");
    echo($a);
}
else{
    echo("O maior valor é a letra b com valor de: ");
    echo($b);   
}

?>