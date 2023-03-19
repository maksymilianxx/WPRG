<?php

echo '<ul>';

if((strlen($_POST['nazwa']) > 0)){
    echo '<li>' . $_POST['nazwa'] . '</li>';
}
if((strlen($_POST['mail']) > 0)){
    echo '<li>' . $_POST['mail'] . '</li>';
}
if((strlen($_POST['telefon']) > 0)){
    echo '<li>' . $_POST['telefon'] . '</li>';
}
if(isset($_POST['pole'])){
    echo '<li>';
    if($_POST['pole']=="stronainternetowa") echo "Wykonanie strony internetowej.";
    echo '</li>';
}
if((strlen($_POST['tresc']) > 0)){
    echo '<li>' . $_POST['tresc'] . '</li>';
}
if(isset($_POST['prefer1']) || isset($_POST['prefer2'])){
    echo '<li>';
    echo "Preferowany: ";
    if($_POST['prefer1']=="on") echo "e-mail";
    if(isset($_POST['prefer1']) && isset($_POST['prefer2'])) echo " i ";
    if($_POST['prefer2']=="on") echo "telefon komorkowy";
    echo '</li>';
}
if(isset($_POST['polejedno'])){
    echo '<li>' . $_POST['polejedno'] . '</li>';
}
if($_POST['attachment']!=""){
    echo '<li>' . $_POST['attachment'] . '</li>';
}

echo '</ul>';

?>
