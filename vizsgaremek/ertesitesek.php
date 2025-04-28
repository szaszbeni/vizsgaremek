<?php
session_start();
require('kapcsolat.php');

$my_id = $_SESSION["uid"];

$notifications = mysqli_query($adb, "SELECT * FROM ertesitesek WHERE euser_id = '$my_id' AND eis_read = 0");

while ($ertesites = mysqli_fetch_assoc($notifications)) {
    echo "<div class='alert alert-info'>{$ertesites['emessage']}</div>";
}

// Esetleg itt automatikusan olvasottra állíthatod:
mysqli_query($adb, "UPDATE ertesitesek SET eis_read = 1 WHERE euser_id = '$my_id'");
?>
