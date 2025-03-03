<?php
session_start();
include("lekerdezes.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!filter_var($_POST["uemail"], FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Nem megfelelő email cím!'); window.location.href='contact.php';</script>";
        exit();
    }
    if (empty($_POST["umessage"])) {
        echo "<script>alert('Hiányzik az üzenet!'); window.location.href='contact.php';</script>";
        exit();
    }
    else{
        echo "<script>alert('Sikeres üzenetküldés!');</script>";

        $ip = $_SERVER['REMOTE_ADDR'];
        $email = $_POST["uemail"];
        $message = $_POST["umessage"];
        $curdate = date('Y-m-d H:i:s');
        $sql = "INSERT INTO messages (mEmail, mUzenet, mDate, mIP)
                VALUES (?, ?, ?, ?)";
        sqlsave($sql, 'ssss', [$email, $message, $curdate, $ip]);
    
        echo "<script>window.top.postMessage({Success: true}, '*');</script>";
    
        exit();
    }
}
?>