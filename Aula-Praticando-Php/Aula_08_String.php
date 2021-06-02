<?php

$nome = "carlos";
$nome2 = 'ABRAAO';
$nome3 = "mendonça";
$frase = "CORINTHIANS CAMPEAO DOS CAMPEOES";

// VOU VER SE AS DUAS SÃO STRINGS, POIS ESTOU USANDO "" E ''

var_dump($nome, $nome2);

// NESSE CASO ELE IDENTIFICA A VARIAVEL
echo "<br> Meu nome é: $nome <br>";


//NESSE CASO É LIDO COMO SE TUDO FOSSE TEXTO
echo 'Meu nome é: $nome';

// COLOCANDO EM MAIUSCULO

echo strtoupper("<br>" .$nome);

// COLOCANDO EM MINUSCULO

echo strtolower("<br>" .$nome2);

//MUDA A PRIMEIRA LETRA DE CADA PALAVRA
echo "<br>";
echo ucwords($nome, $nome3);

//MUDA A PRIMEIRA LETRA DA PRIMEIRA PALAVRA
echo "<br>";
echo ucfirst($nome);

// MUDA O PRIMEIRO CARACTERE SELECIONADO, PELO SEGUNDO DE ACORDO COM A VARIAVEL EM QUESTAO
echo "<br>";
echo str_replace("a","@",$nome);

echo "<br>";

$q = strpos($frase, "CAM");

var_dump($q);



?>

