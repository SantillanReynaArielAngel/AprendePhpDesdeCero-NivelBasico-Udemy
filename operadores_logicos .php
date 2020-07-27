<?php
//mayor de 3 numeros

$a=5;
$b=51;
$c=10;

if($a>$b)
{
    if($a>$c)
    {
        echo 'El mayo es (\$a): '.$a;
    }else
    {
        if($c>$b)
        {
            echo 'El mayor es (\$c): '.$c;
        }
    }
}else
{
    if($b>$c)
    {
        echo 'El mayor es (\$b): '.$b;
    }else
    {
        if($c>$a)
        {
            echo 'El mayor es (\$c): '.$c;
        }
    }
}

echo "<p>";
//diferente de 
if($a==$b)
{
    echo $a."  y ".$b." son iguales <br>";
}
//menor que
if($b<$a)
{   
    echo $b." < ".$a."<br>";
}
//mayor igual
if($a>=$c)
{
    echo $a." es >= a ".$c."<br>";
}
//Menor igual
if($b<=$c)
{
    echo $b." es <= ".$c."<br>";
}

//diferente de
if($a!=$c)
{
    echo $a." es != ".$c."<br>";
}
?>
