<!--Interação form e código php-->

<?php

$condicao = true;

while($condicao){

    $numero = rand(1,10);
    if($numero == 3){

        echo  "<b>TRÊS!!!<b>";
        $condicao = false;

    }

    echo $numero.", ";
}
echo "<br>=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=<br>";

//COLOQUEI AQUI UM RANDOM PRA GERAR VALORES ALEATORIOS PARA DAR DESCONTOS
$dinheiro = rand(1,350);

// NESSE EXEMPLO VOU FIXA O VALOR EM 180
//$dinheiro = 180;

$desconto = 0.9;
do{

    $dinheiro *= $desconto;

}while($dinheiro > 100);

echo $dinheiro;

?>
