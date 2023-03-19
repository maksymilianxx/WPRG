<FORM method="post" action="4_2SIMPLE.php">

    <LABEL>KALKULATOR PROSTY</LABEL><BR>
        <INPUT type="text" name="input1">
        <SELECT name="field">
            <OPTION value="sum">Dodawanie</OPTION>
            <OPTION value="subtract">Odejmowanie</OPTION>
            <OPTION value="multiply">Mnozenie</OPTION>
            <OPTION value="divide">Dzielenie</OPTION>
        </SELECT>
        <INPUT type="text" name="input2"><BR>
            <INPUT type="submit" value="OBLICZ">
</FORM>

<?php

$input1 = (float)$_POST['input1'];
$input2 = (float)$_POST['input2'];

if((strlen($_POST['input1']) > 0) && strlen($_POST['input2']) > 0){
echo "Wynik to: ";
    if($_POST['field']=="sum"){ 
        $sum = $input1 + $input2;
        echo $sum;
    }
    if($_POST['field']=="subtract"){ 
            $sub = $input1 - $input2;
            echo $sub;    
}
    if($_POST['field']=="multiply"){ 
        $mul = $input1 * $input2;
        echo $mul;
}
    if($_POST['field']=="divide"){ 
        $div = $input1 / $input2;
        echo $div;
}
}
else echo "ERROR, WPISZ LICZBY";


?>

<FORM method="post" action="4_2ADVANCED.php">
    <BR><BR><BR>
<LABEL>KALKULATOR ZLOZONY</LABEL><BR>
        <INPUT type="text" name="input">
        <SELECT name="field">
            <OPTION value="cos">Cosinus (radiany)</OPTION>
            <OPTION value="sin">Sinus (radiany)</OPTION>
            <OPTION value="tan">Tangens (radiany)</OPTION>
            <OPTION value="bintodec">Binarne do dziesietnych</OPTION>
            <OPTION value="dectobin">Dziesietne do binarnych</OPTION>
            <OPTION value="dectohex">Dziesietne do szesnastkowych</OPTION>
            <OPTION value="hextodec">Szesnastkowe do dziesietnych</OPTION>
            <OPTION value="rad">Stopnie na radiany</OPTION>
            <OPTION value="deg">Radiany na stopnie</OPTION>
        </SELECT><BR>
        <INPUT type="submit" value="OBLICZ">

</FORM>