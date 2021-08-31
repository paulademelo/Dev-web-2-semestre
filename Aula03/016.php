<?php
/*
Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja 
Se estiver fora do intervalo, informar que não existe o mês

Utilize array.
*/
$relacaoDeMeses = [
    'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro',
];

// Lembra de usar uma url como 0.0.0.0/?mes=int
$mes = $_GET['mes'];

if ($mes < 1 || $mes > 12) {
    echo "O mês desejado não existe, tente novamente com um número entre 1 e 12";
    die;
}

echo $relacaoDeMeses[$mes - 1];