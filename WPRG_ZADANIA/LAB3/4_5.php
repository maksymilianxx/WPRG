<FORM method="post" action="4_5.php">

    <LABEL for="login">PODAJ LOGIN: </LABEL>
        <INPUT type="text" name="login"><BR>
    <LABEL for="haslo">PODAJ HASLO: </LABEL>
        <INPUT type="password" name="haslo"><BR>
    <INPUT type="submit" value="ZALOGUJ SIE">

</FORM>

<?php

$user["maksymilian"] = "1234"; //template $user[login] = password

$login = $_POST['login'];
$password = $_POST['haslo'];

if(isset($user[$login])){

    if($user[$login]==$password){

    header('Location: 4_5li.html');

}
    else{
        exit("ERROR, BLEDNE HASLO!");
    }

}
else exit("ERROR, TAKI UZYTKOWNIK NIE ISTNIEJE!");

?>