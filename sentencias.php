<?php
//sentencias If, Else If, Else

$manzana = true;
$durazno=false;
$guayaba=false;

    if($manzana==$durazno)
    {
        echo 'Verdadero en el primer if <br>';
    }elseif($durazno==$guayaba){
        echo "verdadero segundo if <br>";
    }else
    {
        echo "Entrol en el que esta en el final. <br>";
    }
?>