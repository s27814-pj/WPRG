<?php include 'header.php';

$value = $_GET['value'];

$connect = mysqli_connect("127.0.0.1", "root", "teraz", "mojabaza");
$query = mysqli_query($connect,"SELECT * from samochody WHERE id= $value");
$row = mysqli_fetch_assoc($query);
echo $row['id'] . " / " . $row['marka'] . " / " . $row['model'] . " / " . $row['cena'] .  " / " . $row["rok"] . " / " . $row['opis'];

mysqli_close($connect);

