<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $date = htmlspecialchars($_POST["date"]);
    $message = htmlspecialchars($_POST["message"]);

    $file = fopen("reservations.txt", "a");
    if (!$file) {
        die("Error: Cannot open reservations.txt for writing.");
    }
    fwrite($file, "$name, $email, $phone, $date, $message\n");
    fclose($file);

    echo "<h2>Reservation Successful!</h2>";
}
?>

