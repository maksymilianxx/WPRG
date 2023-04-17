<?php
session_start();
?>
<html>
    <head>
        <title>ZADANIE 1</title>
    </head>
    <body>
<?php
    echo("Podsumowanie wszystkich osób: <BR><BR>");
    for($i=0; $i<$_SESSION['number']; $i++){

        echo($_SESSION['names'][$i]." ".$_SESSION['ids'][$i]);
        echo("<BR>");

    }
?>
<BR>
<a href="6_1.php">Powrót do wpisywania danych</a>
</body>
</html>