<?php
/** */

// CRIANDO UM ARRAY DE PESSOAS
$NomesPessoas = array("Carlos", "Aline","Joao","Mariana", "Paulo");




// CRIANDO UM ARRAY BIDIMENSIONAL

$paises[0][0] = "Brasil";
$paises[0][1] = "Recife";
$paises[0][2] = "Maranhao";
$paises[0][3] = "Brasilia";


// FORMAS DE MOSTRA O ARRAY
echo "Selecionando o elemento do vetor<br>";    
echo $paises[0][2];

// PODEMOS MOSTRAR TODOS COM O COMANDO:
echo "<br>Exibindo arrays com o PRINT_R<br>";
print_r($paises);

// EXIBINDO O ULTIMO ELEMENTO DO ARRAY

echo "Exibindo o ultimo elemento do array";
echo "<br>".end($paises[0]);






?>