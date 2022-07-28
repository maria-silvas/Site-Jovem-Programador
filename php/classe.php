<?php
    class Conta {
     
        var $saldo;
    
        function saldo()
        {
            return $this->saldo;
        }
    
        function  credito($valor)
        {
            return $this->saldo += $valor;
        } 
    }

?>