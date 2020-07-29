<?php
//Array con incides por defecto (0,1,2,3,4....)
$array=array("manzana","durasno","pera");

for($i=0; $i<count($array); $i++)
{
    echo $array[$i]."<br>";
}
echo "////////////////<br>";
foreach($array as $indice => $value)
{
    echo $indice." ".$value."<br>";
}

echo "////////////////////////////<br>";
//creando un Array dandole un indice en especifico:
    $array2=array(
        'numero1'=> 10,
        'numero2'=> 11,
        'numero3'=> 22,
        'numero4'=> 33,
        'numero5'=> 44
    );

    foreach($array2 as $indice2 => $value2)
    {
        echo "El indice es: ".$indice2." con valor ".$value2."<br>";
    }

?>