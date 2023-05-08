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
        $db_connection = mysqli_connect("localhost", "root", "");
        if(!$db_connection){
            echo "Nie udało się połączyć z serwerem.";
        }
        if(!mysqli_select_db($db_connection, "baza")){
            echo "Nie udało się połączyć z bazą.";
        }
        $query_allcars = "SELECT * FROM samochody ORDER BY cena ASC LIMIT 5";
        $result_allcars = mysqli_query($db_connection, $query_allcars);
        if(!mysqli_query($db_connection, $query_allcars)){
            echo "Nieprawidłowe zapytanie.";
        }
        ?>
        <h2>SAMOCHODY z najniższą ceną</h2>
        <table style="width:50%">
            <tr>
            <th>ID</th>
            <th>Marka</th>
            <th>Model</th>
            <th>Cena</th>
            </tr>
            <?php
            while($row_allcars = mysqli_fetch_row($result_allcars)){
                echo "<tr>";
                echo "<td>$row_allcars[0]</td>";
                echo "<td>$row_allcars[1]</td>";
                echo "<td>$row_allcars[2]</td>";
                echo "<td>$row_allcars[3]</td>";
                echo "</tr>";
            }
            ?>
            </table>
            <table style="width:50%">
            <tr>
            <th>
            <a href="mainpage.php">STRONA GŁÓWNA</a>
            </th>
            <th>
            <a href="cars.php">WSZYSTKIE SAMOCHODY</a>
            </th>
            <th>
            <a href="cars_add.php">DODAJ SAMOCHOD</a>
            </th>
        </table>
        <?php
        if(!mysqli_close($db_connection)){
            echo "Błąd podczas zamykania połączenia.";
        }
        ?>
    </body>
    </html>