<?php
// src/AppBundle/Utils/Fibonacci.php
namespace AppBundle\Utils;

class Fibonacci
{
    public function generar($limite)
    {
        $n1 = 1;
        $n2 = 0;
        $res = "0,";
        $suma = 0;
        while($suma < $limite){
            $res = $res.$suma.",";
            $suma = $n1 +$n2;
            $n1 = $n2;
            $n2 = $suma;
        } 
            
        return $res;
    }
}