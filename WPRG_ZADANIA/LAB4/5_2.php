<?php

    function silnia($number){

        $silnia = 1;

        for($i=1;$i<=$number;$i++){

            $silnia*=$i;

        }
        return $silnia;
    }
    
    function silniaR($number){

        if($number<2) return 1;

        return $number*silniaR($number-1);

    }
    $time1 = microtime(true);
    silnia(3);
    $time2 = microtime(true);
    $time3 = $time2-$time1."\n";
    $time1 = microtime(true);
    silniaR(3);
    $time2 = microtime(true);
    $time4 = $time2-$time1."\n";
    
    echo "Funkcja nierekurencyjna: $time3";
    echo "Funkcja rekurencyjna: $time4";

    if($time4>$time3) echo "FUNKCJA NIEREKURENCYJNA DZIAŁA SZYBCIEJ";
    else echo "FUNKCJA REKURENCYJNA DZIAŁA SZYBCIEJ";

?>