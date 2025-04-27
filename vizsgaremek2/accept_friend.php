<?php
session_start();
require('kapcsolat.php');

// Ellenőrizzük, hogy be van-e jelentkezve a felhasználó
if (!isset($_SESSION['uid']) || !isset($_SESSION['uname'])) {
    die('Nincs bejelentkezve!');
}

// Csak POST kérésnél dolgozunk
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Megtisztítjuk az adatokat
    $notification_id = mysqli_real_escape_string($adb, $_POST['eid']);

    // Lekérjük az értesítést
    $notif_query = mysqli_query($adb, "SELECT * FROM ertesitesek WHERE eid = '$notification_id'");
    if (!$notif_query) {
        die('Értesítés lekérdezési hiba: ' . mysqli_error($adb));
    }

    if ($notif = mysqli_fetch_assoc($notif_query)) {
        $user_id = $notif['euser_id'];
        $message = $notif['emessage'];

        // Megnézzük, hogy a szöveg megfelel-e az elvárt mintának
        preg_match('/^(.+) szeretne a barátod lenni!$/', $message, $matches);
        if (isset($matches[1])) {
            $friend_username = mysqli_real_escape_string($adb, $matches[1]);

            // Lekérjük a barát uid-jét
            $user_query = mysqli_query($adb, "SELECT uid FROM user WHERE uname = '$friend_username'");
            if (!$user_query) {
                die('Felhasználó lekérdezési hiba: ' . mysqli_error($adb));
            }

            if ($user_row = mysqli_fetch_assoc($user_query)) {
                $friend_uid = $user_row['uid'];
                $my_uid = $_SESSION['uid'];

                // Frissítjük a barátság státuszát mindkét irányba
                $update1 = mysqli_query($adb, "UPDATE friends SET fStatus = 1 WHERE fmyid = '$friend_uid' AND fid = '$my_uid'");
                $update2 = mysqli_query($adb, "UPDATE friends SET fStatus = 1 WHERE fmyid = '$my_uid' AND fid = '$friend_uid'");

                if ($update1 && $update2) {
                    echo "Barátság létrejött!";
                } else {
                    echo "Hiba a barátság frissítésekor: " . mysqli_error($adb);
                }
            } else {
                echo "Hiba: Felhasználó nem található!";
            }
        } else {
            echo "Hibás értesítés formátum!";
        }
    } else {
        echo "Értesítés nem található!";
    }
}
?>
