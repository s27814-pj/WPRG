<?php include 'header.php';


//$string = <<<EOD
//<form action="details.php" method="get">
//        <input type="hidden" name="value" value="$row[id]">
//        <button type="submit">szczegoly</button>
//    </form>
//EOD;

$connect = mysqli_connect("127.0.0.1", "root", "teraz", "mojabaza");
$query = mysqli_query($connect,"SELECT * from samochody ORDER BY cena asc LIMIT 5");
for ($i = 0; $i < mysqli_num_rows($query); $i++) {
$row = mysqli_fetch_assoc($query);
echo $row['id'] .". " . $row['marka'] . " " . $row['model']
    .", cena: " . $row['cena'];

echo '<form action="details.php" method="get">
       <input type="hidden" name="value" value="' . $row['id'] . '">
        <button type="submit">szczegoly</button>
    </form>';

    echo  " </p><hr>";
}




mysqli_close($connect);
?>