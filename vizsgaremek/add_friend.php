<?php
session_start();
require ('kapcsolat.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $friend_id = $_POST['friend_id'];
    $email = $_SESSION["uname"];

    // Ellenőrizzük, hogy a barát létezik-e
    $result = mysqli_query($adb, "SELECT uname FROM user WHERE uid = '$friend_id'");
    
    if ($row = mysqli_fetch_assoc($result)) {
        $friend_name = $row['uname'];

        // Ellenőrizzük, hogy már barátok-e
        $check_query = mysqli_query($adb, "SELECT * FROM friends WHERE fmyid = '$email' AND fid = '$friend_id'");
        if (mysqli_num_rows($check_query) == 0) {
            // Barát hozzáadása az adatbázishoz
            $sql = "INSERT INTO friends (fid, fname, fmyid, fStatus) 
            VALUES ('$friend_id', '$friend_name', '$email', 1)";
            if (mysqli_query($adb, $sql)) {
                echo "Barát sikeresen hozzáadva!";
            } else {
                echo "Hiba történt: " . mysqli_error($adb);
            }
        } else {
            echo "Ez a felhasználó már a barátod!";
        }
    } else {
        echo "Felhasználó nem található!";
    }
}
?>
