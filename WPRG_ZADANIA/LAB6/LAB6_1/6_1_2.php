<?php
session_start();
?>
<html>
    <head>
        <title>ZADANIE 1</title>
    </head>
    <body>
    <FORM method="post" action="6_1_2.php">
    <SELECT name="field">

    <?php
    for($i=0; $i<$_SESSION['number']; $i++){
        echo ("<OPTION value=\"person");
        echo $i+1;
        echo ("\">Osoba o numerze: ");
        echo $i+1;
        echo ("</OPTION>");
    }
    ?>
    </SELECT><BR>
    <INPUT type="submit" value="Wyświetl">
    </FORM>
    <?php
    for($i=6; $i<strlen($_POST['field']); $i++){

        $number = $number.$_POST['field'][$i]; 

    }
    if(isset($_POST['field'])){
    echo("Informacje o osobie $number:<BR>");
    echo("Nazwa: ");
    echo($_SESSION['names'][$number-1]);
    echo("<BR>ID: ");
    echo($_SESSION['ids'][$number-1]);
    }
    ?>
    <BR><BR>
<a href="6_1.php">Powrót do wpisywania danych</a><BR>
<a href="6_1_3.php">Podsumowanie</a>
</body>
</html>

