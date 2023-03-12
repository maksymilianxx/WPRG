<?php

    function prime($number){

        $countdiv=0;
        $count=0;

        for($i=2;$i<$number/2;$i++){

            if($number%$i==0){
                $countdiv++;
            }

            $count++;

        }

        if($countdiv==0 && $number>1) return "LICZBA PIERWSZA, iteracja wykonała się $count razy.";
        else return "NIE LICZBA PIERWSZA";

    }

    echo prime(73);
    
?>