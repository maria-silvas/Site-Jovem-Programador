<?php
    $letra =$_POST["letra"];
  
    function verificar($letra)   {
        $letra = strtoupper($letra);
        if (($letra=="A") || ($letra=="E") || ($letra=="I") || ($letra=="O") || ($letra=="U")) {
            return "Sim";
        }
        else {
            return "Não";
        }
    }
 
    $verificacao = verificar($letra);     

    echo "Letra digitada: " . $letra;
    echo "<br> Vogal?  " . $verificacao;
 
?>