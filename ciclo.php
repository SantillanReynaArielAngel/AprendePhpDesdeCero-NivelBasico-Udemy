<?php
    //ciclo o bucle for
    for($i=1; $i<=10; $i++)
    {
        if($i<=6)
        {
            echo "Son las ".$i." de la tarde";
        }else
        {
            echo "Son las ".$i." de la noche";
        }
        echo "<br>";
    }


    //while
    echo "////////////// <br>";
    $a=5;
    while($a>=1)
    {
        echo "La pelicula comenzara en : ".$a.'<br>';
        $a--;
    }

    //dowhile
    echo "/////////////////<br>";
    $s=1;
    do{ 
        if($s!=8){
            echo "Contraseña debil, se necesita ".(8-$s)." caraccteres mas. <br>";
        }else{
            echo "<b>Contraseña Segura<b>";
        }
        
        $s++;
    }while($s<=8);


    
//No es necesario utilizar el ciere
?>