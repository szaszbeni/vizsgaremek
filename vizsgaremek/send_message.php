<?php
session_start();
require ('kapcsolat.php');

$email = $_SESSION["uname"];
$friend = $_POST["friend"];
$message = mysqli_real_escape_string($adb, $_POST["uzi"]);
$date = date("Y-m-d H:i:s");

if (!empty($message)) {
    mysqli_query($adb, "INSERT INTO uzenetek (uEmail, recipient, uUzenet, uDate) 
        VALUES ('$email', '$friend', '$message', '$date')");
}
?>
