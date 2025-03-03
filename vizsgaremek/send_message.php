<?php
session_start();
require ('kapcsolat.php');

$email = $_SESSION["uname"];
$friend = $_POST["friend"];
$message = mysqli_real_escape_string($adb, $_POST["uzi"]);
$date = date("Y-m-d H:i:s");

if (!empty($message)) {
    $query = "INSERT INTO uzenetek (uEmail, uReceiver, uUzenet, uDate) 
              VALUES ('$email', '$friend', '$message', '$date')";

    if (mysqli_query($adb, $query)) {
        echo "Üzenet sikeresen elküldve!";
    } else {
        echo "Hiba történt: " . mysqli_error($adb);
    }
} else {
    echo "Az üzenet nem lehet üres!";
}
?>
