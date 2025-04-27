<?php  
session_start();
require ('kapcsolat.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $friend_id = $_POST['friend_id'];
    $email = $_SESSION["uname"];
    $uid = $_SESSION["uid"];

    $result = mysqli_query($adb, "SELECT uname FROM user, friends WHERE uid = '$friend_id'");
    
    if ($row = mysqli_fetch_assoc($result)) {
        $friend_name = $row['uname'];

        $check_query = mysqli_query($adb, "SELECT * FROM user, friends WHERE (fmyid = '$uid' AND fid = '$friend_id') OR (fmyid = '$friend_id' AND fid = '$uid')");
        if (mysqli_num_rows($check_query) == 0) {
            $message = "$email szeretne a barátod lenni!";
            $notify_sql = "INSERT INTO ertesitesek (euser_id, emessage, etype) VALUES ('$friend_id', '$message', 'friend_request')";
            mysqli_query($adb, $notify_sql);
            echo "Barátkérés elküldve!";
        } else {
            echo "Már van barátság vagy függőben lévő kérés!";
        }
    } else {
        echo "Felhasználó nem található!";
    }
}
?>
