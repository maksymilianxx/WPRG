<html>
    <head>
        <title>ZADANIE 2</title>
    </head>
    <body>
<?php
if(isset($_POST['nazwa']) && !isset($_COOKIE['user'])){
    $login = $_POST['nazwa'];
    setcookie("user","$login");
}
else if(isset($_COOKIE['user'])){
    $login = $_COOKIE['user'];
}
if(isset($_COOKIE['user'])){
if(!isset($_COOKIE["counter".$login])){
    setcookie("counter".$login, 1);
    echo ("Odwiedziłeś stronę jako ");
    echo ($_COOKIE['user'].".");
}
else{ 
setcookie("counter".$login, $_COOKIE["counter".$login]+1);
echo ("Odwiedziłeś stronę ");
echo ($_COOKIE['counter'.$login]);
echo (" razy jako ");
echo ($_COOKIE['user'].".");
}
if($_COOKIE["counter".$login]>10) echo("<BR>Stale odwiedzasz naszą stronę, dziękujemy.");
}
?>
<BR><a href="6_2l.php">WYLOGUJ SIE</a>
</body>
</html>