<?php

$slowa = array("jabłko", "gruszka");

$zdanie = "Mój ulubiony owoc to GRUSZKA"; //cenzurowane zdanie (aby dzialalo poprawnie nalezy zapisac zdanie bez znakow interpunkcyjnych)

$zdanie_array = explode(" ", $zdanie); //rodzielenie zdania na slowa

foreach ($zdanie_array as $slowo){

    if(in_array(strtolower($slowo), $slowa)==true){ //przeszukiwanie tabeli slow zakazanych wedlug slow z wpisanego wczesniej zdania

        $slowo = "*****"; //zastepowanie slowa ocenzurowanym slowem

    } 
    $censored[] = $slowo; //tworzenie tabeli slow z nalozona cenzura

}

$zdanie = implode(" ", $censored); //tworzenie zdania ze slow
echo $zdanie."."; //wyswietlenie zdania z kropka na koncu

?>