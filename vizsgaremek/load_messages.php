<?php
session_start();
require ('kapcsolat.php');

$email = $_SESSION["uname"];
$friend = $_POST["friend"];

$messages = mysqli_query($adb, "SELECT uEmail, uUzenet, uDate FROM uzenetek 
    WHERE (uEmail = '$email' AND recipient = '$friend') OR (uEmail = '$friend' AND recipient = '$email') 
    ORDER BY uDate ASC");

while ($msg = mysqli_fetch_assoc($messages)) {
    $sender = ($msg['uEmail'] == $email) ? "Én" : $msg['uEmail'];
    echo "<div><b>{$sender}:</b> {$msg['uUzenet']} <br><small>{$msg['uDate']}</small><hr></div>";
}
?>
