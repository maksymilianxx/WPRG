<?php

function showInArray($number, $array){ //funkcja pokazujaca element o indeksie $number z tablicy $array

    return $array[$number];

}

for($i = 0; $i<100; $i++){

    $array[] = rand(1,1000); //tworzenie tablicy 100 elementowej o pseudolosowych liczbach od 1 do 1000

}

echo showInArray(0,$array); //wyswietla pierwszy element tablicy

?>