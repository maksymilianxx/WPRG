<FORM method="get" action="5_1.php">

    <LABEL for="birth">INPUT YOUR BIRTHDAY: </LABEL><BR>
        <INPUT type="date" name="birth"><BR>
    <INPUT type="submit" value="SUBMIT">

</FORM>

<?php

function daybirth($date){

    $birth = date_create((string)$date);
    echo date_format($birth, "l");

}

function age($date){

    $birth = date_create((string)$date);
    $birth = date_diff($birth, date_create('now'))->y;
    echo $birth;
    

}

function daystobirthday($date){

    $date = substr((string)$date,4);
    $date = (string)date("Y").$date;
    $birth = new DateTime((string)$date);
    $now = new DateTime(((string)date("Y-m-d")));
    $days = $now->diff($birth)->format("%a");
    echo $days;

}

$date = $_GET['birth'];

echo "YOU HAVE BEEN BORN ON: ";
daybirth($date);
echo "<BR>YOUR AGE IS: ";
age($date);
echo "<BR>DAYS UNTIL YOUR BIRTHDAY: ";
daystobirthday($date);


?>