<?php

$figura = 2; //1 to trojkat, 2 to prostokat, 3 to trapez

switch($figura){

case 1:

    echo("Wybrana figura to trójkąt.\n");
    $podstawa = 5; //dlugosc podstawy
    $wysokosc = 4; //wysokosc trojkata
    $polet = ($podstawa*$wysokosc)/2; //obliczanie pola trojkata
    echo "Pole trójkąta wynosi: ".$polet.".";
    break;

case 2:

    echo("Wybrana figura to prostokąt.\n");
    $bok1 = 5; //dlugosc boku 1
    $bok2 = 4; //dlugosc boku 2
    $polep = $bok1*$bok2; //obliczanie pola prostokatu
    echo "Pole prostokąta wynosi: ".$polep.".";
    break;

case 3:
    echo("Wybrana figura to trapez.\n");
    $podstawa1 = 5; //dlugosc podstawy 1
    $podstawa2 = 4; //dlugosc podstawy 2
    $wysokosct = 4; //wysokosc trapezu
    $polet = (($podstawa1+$podstawa2)*$wysokosct)/2; //obliczanie pola prostokatu
    echo "Pole trapezu wynosi: ".$polet.".";
    break;

}

?>