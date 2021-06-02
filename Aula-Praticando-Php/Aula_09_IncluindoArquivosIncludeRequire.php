<?php

// INCLUI ARQUIVOS, PODE DEPENDER DE ESPQSIFICAÇÕES DE CAMINHOS

include "Aula_09_ComplementoAula9IncludeRequire.php";

$mostrarResultado = somar(5, 7);

echo $mostrarResultado;


// INCLUI ARQUIVOS SE O MESMO EXISTIR

//require "local.php";        //exemplo não práticos


// OBRIGA A ABERTUDA DE UM ARQUIVO DE UM LOCAL ESPECIFICO (NÃO PERMITE DUPLICAÇÃO)

//require_once "local.php";   //exemplo não práticos
//include_once "local.php";   //exemplo não práticos

?>