<?php

// USANDO FOREACH

$meses = array(
    
                "Janeiro", "Fevereiro", "Março", "Abril",
                "Maio", "Junho", "Julho", "Agosto",
                "Setembro", "Outubro", "Novembro", "Dezembro"


);

// A VARIAVEL MÊS VAI ARMAZENAR OS MESES SEPARADOS POR VADA INDEX
foreach ($meses as $mes){

    echo "O mês é: " . $mes . "<br>";
}

echo "<br><br>=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=<br><br>";

// FOREACH MOSTRANDO O INDEX

echo "Foreach mostrando o valor das variaveis e a posição do  vetor<br>";
foreach ($meses as $index => $mes){
    echo "O valor do index é: " .$index. "<br>";
    echo "O mês é: " . $mes . "<br>";
}







?>
