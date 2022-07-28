<?php
$num=$_POST["numero"];



$escolha=$_POST["escolha"];
if($escolha=="PAR"){
    $texto = "Numeros pares:\n";
    echo nl2br($texto);
    for ($i=0;$i<=$num;$i++)
    {
        if ($i%2==0)
        echo " " . $i;
    }
}
if($escolha=="IMPAR"){
    $texto = "Numeros Í­mpares:\n";
    echo nl2br($texto);
    for ($i=0;$i<=$num;$i++)
    {
        if ($i%2!=0)
        echo " " . $i;
    }
}
  
?>
