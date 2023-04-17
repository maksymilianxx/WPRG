<?php
session_start();
?>
<html>
    <head>
        <title>ZADANIE 1</title>
    </head>
    <body>
    <FORM METHOD="post" ACTION="6_1.php">
        <LABEL FOR="nazwa">Imie i nazwisko osoby: </LABEL>
            <INPUT TYPE="text" NAME="nazwa"><br>
        <LABEL FOR="id">Numer identyfikacyjny osoby: </LABEL>
            <INPUT TYPE="text" NAME="id"><br>
        <INPUT type="submit" value="Wyślij">
    </FORM>
    <?php
    if(!isset($_SESSION['number'])){
        $_SESSION['number'] = 0;
    }
    if($_POST['nazwa']!="" && $_POST['id']!=""){
        $_SESSION['names'][$_SESSION['number']] = $_POST['nazwa'];
        $_SESSION['ids'][$_SESSION['number']] = $_POST['id'];
        $_SESSION['number']++;
    }
    echo("Ilość wpisanych uzytkowników: ");
    echo $_SESSION['number'];
    ?>
    <BR>
<a href="6_1_2.php">Zbiór danych</a>
</body>
</html>