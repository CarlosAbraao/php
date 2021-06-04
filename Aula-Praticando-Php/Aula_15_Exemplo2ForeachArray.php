<!--Interação form e código php-->

<form>

<input type="text" name="nome">
<input type="date" name="nascimento">
<input type="submit" value="Ok">

</form>



<?php

foreach($_GET as $Key => $value){

    echo "Nome do campo: " . $Key . "<br>";
    echo "Valor do campo: " . $value;

    echo "<hr>";
}


?>
