<?php
    $idade =$_POST["idade"];
  
    function mensagem($idade) {
        if (($idade >= 0) and ($idade < 12)) {
            return "Você é Criança";
        }
        else if (($idade >= 12) and ($idade < 18)) {
            return "Você é adolescente";
        }
        else if (($idade >= 18) and ($idade < 65)) {
            return "Você é adulto";
        }
        else if ($idade >= 65) {
            return "Você é idoso";
        }
        else {
            return "Idade inválida";
        }
    }       
 
    $resultado = mensagem($idade);     

    echo "Mensagem: " . $resultado;
?>