<?php include 'header.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = ($_POST['id']);
    $marka = ($_POST['marka']);
    $model = ($_POST['model']);
    $cena = ($_POST['cena']);
    $rok = ($_POST['rok']);
    $opis = ($_POST['opis']);

    $sqlConnect = mysqli_connect("127.0.0.1", "root", 'teraz', "mojabaza");
    $query = mysqli_query($sqlConnect, "INSERT INTO samochody VALUES ('$id', '$marka', '$model', '$cena', '$rok', '$opis')");

    echo $id . "</br>";
    echo $marka . "</br>";
    echo $model . "</br>";
    echo $cena . "</br>";
    echo $rok . "</br>";
    echo $opis . "</br>";
    mysqli_close($sqlConnect);
}