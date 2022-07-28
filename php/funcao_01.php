<?php
    $number =$_POST["quilometro"];
    $jardas = 0; $milhas = 0; $metros = 0;

    function calculo1($number, $jardas) {
        $jardas = $number * (1093.61);
        return $jardas;
    }

    function calculo2($number, $milhas) {
        $milhas = $number * (0.621371);
        return $milhas;
    }

    function calculo3($number, $metros) {
        $metros = $number * (1000);
        return $metros;
    }
 
    $resultado1 = calculo1($number, $jardas);    
    $resultado2 = calculo2($number, $milhas);  
    $resultado3 = calculo3($number, $metros);   

    echo "Jardas: " . $resultado1;
    echo "<br>Milhas: " . $resultado2;
    echo "<br>Metros:  " . $resultado3;
 
?>