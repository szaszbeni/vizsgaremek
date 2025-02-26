<?php
session_start();
require ('kapcsolat.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $friend_id = $_POST['friend_id'];
    $email = $_SESSION["uname"];

    $result = mysqli_query($adb, "SELECT uname FROM user WHERE uid = '$friend_id'");
    
    if ($row = mysqli_fetch_assoc($result)) {
        $friend_name = $row['uname'];

        $check_query = mysqli_query($adb, "SELECT * FROM friends WHERE fmyid = '$email' AND fid = '$friend_id'");
        if (mysqli_num_rows($check_query) == 0) {
            $myName = $_SESSION["uname"];
            $sql = "INSERT INTO friends (fid, fname, myName, fmyid, fStatus) 
            VALUES ('$friend_id', '$friend_name', '$myName', '$email', 1)";
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
