<?php

    function multiplicationTable($size){

        for($i=1;$i<=$size;$i++){

            for($j=1;$j<=$size;$j++){

                $table_element = $i*$j; //tworzenie elementow tabliczki mnozenia
                echo $table_element."\t";

            }
        
            echo ("\n");

        }

    }

    multiplicationTable(10);

?>