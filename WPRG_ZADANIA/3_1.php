<?php

function maxFor($array){

    $max_for = 0;
    for($i = 0; $i<sizeof($array); $i++){

        if($array[$i]>$max_for){
        
            $max_for = $array[$i];
        
        }
        
    }

    return $max_for;

}

function maxForEach($array){

    $max_foreach = 0;
    foreach($array as $element){

        if($element>$max_foreach){
    
            $max_foreach = $element;
        
        }
    
    }

    return $max_foreach;

}

function maxWhile($array){

    $max_while = 0;
    $x = 0;
    while($x<sizeof($array)){

    if($array[$x]>$max_while){

        $max_while = $array[$x];
    
    }

    $x++;

    }

    return $max_while;

}

function maxDoWhile($array){

    $max_dowhile = 0;
    $n = 0;
    do{

        if($array[$n]>$max_dowhile){

            $max_dowhile = $array[$n];
        
        }
        $n++;

    } while($n<sizeof($array));

    return $max_dowhile;

}

for($i = 0; $i<100; $i++){

    $array[] = rand(1,1000); //tworzenie tablicy 100 elementowej o pseudolosowych liczbach od 1 do 1000

}

echo maxFor($array)."\n"; //z petli for
echo maxForEach($array)."\n"; //z petli foreach
echo maxWhile($array)."\n"; //z petli while
echo maxDoWhile($array)."\n"; //z petli do while

?>