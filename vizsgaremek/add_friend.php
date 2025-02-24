<?php
session_start();
$adb = mysqli_connect("localhost", "root", "", "szb_registration");

if ($adb) {
    
    //$user_id = $_POST['uid'];
    $email = $_SESSION["uname"];
    $sql = "
        INSERT INTO friends (`fid`, `fmyid`) 
        VALUES        (null , '$email')
    ";
}
        
    mysqli_query($adb, $sql);
        //if (mysqli_query($sql)) {
        //    echo "Friend added successfully.";
        //} else {
        //    echo "Error adding friend.";
        //}
?>
