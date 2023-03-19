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

<?php

$input = (float)$_POST['input'];

if((strlen($_POST['input']) > 0)){
echo "Wynik to: ";
    if($_POST['field']=="cos"){ 
        echo cos($input);
    }
    if($_POST['field']=="sin"){ 
        echo sin($input);    
}
    if($_POST['field']=="tan"){ 
        echo tan($input);
}
    if($_POST['field']=="bintodec"){ 
        echo bindec((string)$input);
}
    if($_POST['field']=="dectobin"){ 
        echo decbin((int)$input);
}
    if($_POST['field']=="dectohex"){ 
        echo dechex((int)$input);
}
    if($_POST['field']=="hextodec"){ 
        echo hexdec((string)$input);
}
    if($_POST['field']=="rad"){ 
        echo deg2rad($input);
}
    if($_POST['field']=="deg"){ 
        echo rad2deg($input);
}   
}
else echo "ERROR, WPISZ LICZBE";


?>