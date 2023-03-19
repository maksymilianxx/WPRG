<FORM method="post" action="4_3.php">

    <LABEL for="rok">PODAJ ROK: </LABEL>
        <INPUT type="text" name="rok">
        <INPUT TYPE="submit" VALUE="OBLICZ">

</FORM>

<?php

$rok = $_POST['rok'];
$x = 0;
$y = 0;

if($rok<=1582 && $rok>=1){
    $x = 15;
    $y = 6;
}
else if($rok>=1583 && $rok<=1699){
    $x = 22;
    $y = 2;
}
else if($rok>=1700 && $rok<=1799){
    $x = 23;
    $y = 3;
}
else if($rok>=1800 && $rok<=1899){
    $x = 23;
    $y = 4;
}
else if($rok>=1900 && $rok<=2099){
    $x = 24;
    $y = 5;
}
else if($rok>=2100 && $rok<=2199){
    $x = 24;
    $y = 6;
}
else{ 
    exit("Podano nieprawidłowy rok.");
}

$a = $rok%19;
$b = $rok%4;
$c = $rok%7;
$d = (19*$a+$x)%30;
$f = ((2*$b)+(4*$c)+(6*$d)+$y)%7;

if($f==6 && $d==29) echo "Wielkanoc jest 26 kwietnia.";
else if((($f==6) && ($d==28)) && ((((11*$x)+11)%30)<19)) echo "Wielkanoc jest 18 kwietnia.";
else if(($d+$f)<10){
    $e = 22+$d+$f;
    echo "Wielkanoc jest $e marca.";
} 
else if(($d+$f)>9){
    $g = ($d+$f-9);
    echo "Wielkanoc jest $g kwietnia.";
}

?>