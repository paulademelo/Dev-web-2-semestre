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
declare(strict_types=1);

function calculaMedia(float $nota1, float $nota2) : float
{
    return ($nota1 + $nota2) / 2;
}

function decideAprovacaoPorMedia(float $media) : void
{
    echo 'Média: '. $media . '<br>';

    if ($media > 7) {
        echo 'Aluno aprovado <br>';
    } elseif ($media > 5) {
        echo 'Aluno em recuperação <br>';
    } else {
        echo 'Aluno reprovado <br>';
    }

    echo '<br>';
}

$nota_1 = 9;
$nota_2 = 4;

$media = calculaMedia($nota_1, $nota_2);
decideAprovacaoPorMedia($media);