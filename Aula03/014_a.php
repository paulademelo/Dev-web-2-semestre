<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.
*/

$nota_1 = 9;
$nota_2 = 9;

$media = ($nota_1 + $nota_2)/2;

if( $media <= 4.9){
    echo("O aluno está reprovado com nota de: ").PHP_EOL;
    echo($media).PHP_EOL;
}elseif (($media >=5 ) and ($media <= 7)) {
    echo("O aluno está de recuperação com nota de: ").PHP_EOL;
    echo($media).PHP_EOL;
}else {
    echo("Aluno aprovado com nota de: ").PHP_EOL;
    echo($media).PHP_EOL;
}
?>