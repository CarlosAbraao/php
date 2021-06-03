<?php

// ESTRUTURA DE REPETIÇÃO LAÇO FOR COM BREAK E CONTINUE
//

// CRIANDO UM CONTAGEM REGRESSIVA DE ANO
/**for ($i = date("Y"); $i > date("Y")-100; $i-- )

echo $i . "<br>";**/



for ($i = 0; $i < 100; $i++ ){

    if($i > 50 && $i < 70) {

        // NESSE CASO ELE DEIXAR DE MOSTRAR  O INTERVALO DE 51 ATÉ 69 E MOSTRARÁ APARTIR DO 70
        //EX:
        echo '<br> valor dentro do  intervalo do "i" aprentados no if:  '. $i. "<br><br>";

        continue;

        // SE EU USAR O BREAK ELE IRÁ PARA ASSIM QUE ENCONTRAR O PRIMEIRO VALOR DENTRO DO INTEVALO
        //EX:
        //TIRAR COMENTARIO PARA TESTAR AS DIFERENÇAS
        //echo '<br> valor dentro do  intervalo do "i" aprentados no if:  '. $i. "<br><br>";

       //break;
    
    }

    echo $i . "<br>";

}





?>
