<?php
    $n =$_POST["n"];
  
    function tabuada($n)   {
        for ($i = 0; $i <= 10; $i++) {
            echo $n * $i . "<br>";
        }
    }

    echo "Número digitado: " . $n . "<br><br>";
    tabuada($n);
 
?>