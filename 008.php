<?php
/*
Descrubra se $numero é :
 - Divisível por 10
 - Divisível por 3
 - Se não é divisível por nenhum destes 

Imprimir mensagem na tela do número e as condições acima.
*/
$numero = 150;

if($numero /10 != 0){
    echo("O número é divisível por 10").PHP_EOL;
}if ($numero /3 !=0) {
    echo("\n\n O número é divisível por 3").PHP_EOL;
}else{
    echo("O número não é divisível por 10 ou 3");
}

?>