<?php

function dice_throw($number){ //gdzie $number to liczba rzutow kostka

    for($i=1;$i<=$number;$i++){

        $random = rand(1,6); //losowanie
        echo("Wynik rzutu numer $i: $random.\n"); //wyswietlenie wynikow

    }

}

dice_throw(4);

?>