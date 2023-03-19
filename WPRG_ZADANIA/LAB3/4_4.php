<FORM method="post" action="4_4.php">

    <LABEL for="pesel">PODAJ PESEL: </LABEL>
        <INPUT type="text" name="pesel">
        <INPUT TYPE="submit" VALUE="PRZESLIJ">

</FORM>

<?php

$pesel = $_POST['pesel'];

$peselsplit[] = str_split($pesel, 2);

if((int)$peselsplit[0][1]>=20 && (int)$peselsplit[0][1]<=32){
 $peselsplit[0][1] = (int)$peselsplit[0][1]-20;
 if((int)$peselsplit[0][1]<10) $peselsplit[0][1] = "0".$peselsplit[0][1];
}

$peselsplit2[] = str_split($pesel, 1);
$plec = "";
if((int)$peselsplit2[0][9]%2==0) $plec = "kobieta";
else $plec = "mezczyzna";


echo "Data urodzenia: ".$peselsplit[0][2]."-".$peselsplit[0][1]."-".$peselsplit[0][0];
echo "<BR>"."Plec: ".$plec;

?>