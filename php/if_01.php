<?php
    $dia =$_POST["dia"];
    $mes =$_POST["mes"];
  
    function conta($dia, $mes) {
        if ((0 < $mes) and ($mes < 13)) {
            if(($mes == 1) and ($dia > 0) and ($dia < 32)){
                return "Data válida!";                
            }
            else if(($mes == 2) and ($dia > 0) and ($dia < 29)){
                return "Data válida!";                
            }
            else if(($mes == 3) and ($dia > 0) and ($dia < 32)){
                return "Data válida!";                
            }
            else if(($mes == 4) and ($dia > 0) and ($dia < 31)){
                return "Data válida!";                
            }
            else if(($mes == 5) and ($dia > 0) and ($dia < 32)){
                return "Data válida!";                
            }
            else if(($mes == 6) and ($dia > 0) and ($dia < 31)){
                return "Data válida!";                
            }
            else if(($mes == 7) and ($dia > 0) and ($dia < 32)){
                return "Data válida!";                
            }
            else if(($mes == 8) and ($dia > 0) and ($dia < 32)){
                return "Data válida!";                
            }
            else if(($mes == 9) and ($dia > 0) and ($dia < 31)){
                return "Data válida!";                
            }
            else if(($mes == 10) and ($dia > 0) and ($dia < 32)){
                return "Data válida!";                
            }
            else if(($mes == 11) and ($dia > 0) and ($dia < 31)){
                return "Data válida!";                
            }
            else if(($mes == 12) and ($dia > 0) and ($dia < 32)){
                return "Data válida!";                
            }
            else {
                return "Essa data é invalida";
            }
        }
            else {
            return "Essa data é invalida";
        }
    }       
 
    $resultado = conta($dia, $mes);     

    echo "Validade: " . $resultado;
?>