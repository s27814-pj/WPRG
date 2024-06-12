<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $date = htmlspecialchars($_POST['date']);

    // Process the data (e.g., save to database, send email, etc.)
    // For demonstration, we'll just display the data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Date of Birth: " . $date . "<br>";
}
?>
