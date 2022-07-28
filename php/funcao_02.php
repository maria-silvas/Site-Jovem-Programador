<?php
    $num_A =$_POST["num_A"];
    $num_B =$_POST["num_B"];

    function somar($numA,$numB)   {
        return $numA + $numB;
    }       
 
    $resultado = somar($num_A,$num_B);     

    echo "O valor de Número 1 é: " . $num_A;
    echo "<br>O valor de Número 2 é: " . $num_B;
    echo "<br> A soma dos Números é:  " . $resultado;
 
?>