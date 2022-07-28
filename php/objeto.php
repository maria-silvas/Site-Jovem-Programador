<?php
    include ("classe.php");

    $valortx = $_GET["txsaldo"];

    $minhaconta = new conta; 
    $minhaconta -> credito(1000);
    echo "Saldo:  ".$minhaconta -> saldo()."\n";   
    $minhaconta -> credito($valortx); 
    echo "<br>Crédito:  ".$minhaconta -> saldo();    

?>