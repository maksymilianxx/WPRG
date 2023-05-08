<html>
    <head>
        <title>ZADANIE BAZA DANYCH</title>
    </head>
    <style>
        div {
  background-color: white;
  width: 390px;
  border: 1px solid black;
  padding: 50px;
  margin: 20px;
}
table, th, td {
  border:1px solid black;
}
    </style>
    <body>
    <div>
    <FORM METHOD="post" ACTION="cars_add.php">
        <LABEL FOR="id">ID samochodu: </LABEL>
            <INPUT TYPE="text" NAME="id"><br>
        <LABEL FOR="brand">Marka samochodu: </LABEL>
            <INPUT TYPE="text" NAME="brand"><br>
        <LABEL FOR="model">Model samochodu: </LABEL>
            <INPUT TYPE="text" NAME="model"><br>
        <LABEL FOR="price">Cena samochodu: </LABEL>
            <INPUT TYPE="text" NAME="price"><br>
        <LABEL FOR="year">Rok produkcji: </LABEL>
            <INPUT TYPE="text" NAME="year"><br>
        <p><LABEL FOR="desc">Opis samochodu: </LABEL></p>
            <textarea NAME="desc" ROWS="5" COLS="50"></textarea>
        <p><INPUT type="submit" value="Dodaj samochód"></p>
    </FORM>
    </div>
    <?php
$db_connection = mysqli_connect("localhost", "root", "");
if(!$db_connection){
    echo "Nie udało się połączyć z serwerem.";
}
if(!mysqli_select_db($db_connection, "baza")){
    echo "Nie udało się połączyć z bazą.";
}
$id = (int)$_POST['id'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$price = (int)$_POST['price'];
$year = (int)$_POST['year'];
$desc = $_POST['desc'];

if(isset($_POST['id'])){

if($id=="" || $brand=="" || $model=="" || $price=="" || $year=="" || $desc==""){
    echo "Nie podano którejś z informacji.";
}
else{
    $query_addcar = "INSERT INTO samochody (id, marka, model, cena, rok, opis) VALUES ($id, '$brand', '$model', $price, $year, '$desc')";

    if(mysqli_query($db_connection, $query_addcar)){
        echo "Pomyślnie dodano nowy samochód.";
    }
    else{
        echo "Nieprawidłowe zapytanie.";
    }
}
}
?>
<br><br>
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