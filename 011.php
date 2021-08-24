<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.

Crie uma função com o nome calculo_media.
Use tipagem estrita e limite os parâmetros a receber float.
*/
function calculo_media( $nota_1, $nota_2){
    $media = ($nota_1 + $nota_2)/2;
    return $media;
}

$nota_1 = 9.0;
$nota_2 = 4.0;
$media = calculo_media($nota_1, $nota_2);

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