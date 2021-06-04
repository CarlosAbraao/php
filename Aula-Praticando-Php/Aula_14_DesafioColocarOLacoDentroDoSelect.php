<?php

// ESTRUTURA DE REPETIÇÃO COM LAÇO FOR E MESCLAGEM DO SELECT
//

// CRIANDO UM CONTAGEM REGRESSIVA DE ANO



echo "<select>";

for ($i = date("Y"); $i > date("Y")-100; $i-- ){

    echo '<option value="'.$i.'">' .$i. '</option value>';

}

echo "</select>";









?>
