<?php include 'header.php';

$connect = mysqli_connect("127.0.0.1", "root", "teraz", "mojabaza");
$query = mysqli_query($connect,"SELECT * from samochody ORDER BY rok asc ");
for ($i = 0; $i < mysqli_num_rows($query); $i++) {
$row = mysqli_fetch_assoc($query);
echo $row['id'] .". " . $row['marka'] . " " . $row['model']
.", cena: " . $row['cena'];


echo  " </p><hr>";
}

mysqli_close($connect);