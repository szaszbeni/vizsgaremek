<?php
require('kapcsolat.php');
session_start();

if (!isset($_SESSION["uid"])) {
    echo "Nincs bejelentkezett felhasználó!";
    exit();
}

$uid = (int)$_SESSION["uid"];
$notif_result = mysqli_query($adb, "SELECT eid, emessage, etype FROM user, ertesitesek WHERE euser_id = '$uid' AND eis_read = 0 ORDER BY ecreated_at DESC");

if (!$notif_result) {
    echo "Adatbázis hiba: " . mysqli_error($adb);
    exit();
}

$notifications = [];
while ($notif = mysqli_fetch_assoc($notif_result)) {
    $notifications[] = $notif;
}

echo json_encode($notifications);
?>
