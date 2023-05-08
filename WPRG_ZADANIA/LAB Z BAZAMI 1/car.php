<html>
    <head>
        <title>ZADANIE BAZA DANYCH</title>
    </head>
    <style>
table, th, td {
  border:1px solid black;
}
    </style>
    <body>
<?php
$number = $_GET['car'];
?>
<?php
        $db_connection = mysqli_connect("localhost", "root", "");
        if(!$db_connection){
            echo "Nie udało się połączyć z serwerem.";
        }
        if(!mysqli_select_db($db_connection, "baza")){
            echo "Nie udało się połączyć z bazą.";
        }
        $query_car = "SELECT * FROM samochody WHERE id='$number'";
        $result = mysqli_query($db_connection, $query_car);
        if(!mysqli_query($db_connection, $query_car)){
            echo "Nieprawidłowe zapytanie.";
        }
        ?>
        <h2>SAMOCHÓD o numerze identyfikacyjnym <?php echo $number ?></h2>
        <table style="width:50%">
            <tr>
            <th>ID</th>
            <th>Marka</th>
            <th>Model</th>
            <th>Cena</th>
            <th>Rocznik</th>
            </tr>
            <?php
            $row_car = mysqli_fetch_row($result);
                echo "<tr>";
                echo "<td>$row_car[0]</td>";
                echo "<td>$row_car[1]</td>";
                echo "<td>$row_car[2]</td>";
                echo "<td>$row_car[3]</td>";
                echo "<td>$row_car[4]</td>";
                echo "</tr>";
            ?>
            <table style="width:50%">
            <tr>
            <th>
            <a href="mainpage.php">STRONA GŁÓWNA</a>
            </th>
            <th>
            <a href="cars.php">WSZYSTKIE SAMOCHODY</a>
            </th>
            </table>
            <?php
            echo "<br><b>OPIS SAMOCHODU</b><br>".$row_car[5];
        if(!mysqli_close($db_connection)){
            echo "Błąd podczas zamykania połączenia.";
        }
        ?>
    </body>
</html>