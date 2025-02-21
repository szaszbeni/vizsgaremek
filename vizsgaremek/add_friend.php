<?php
require ('kapcsolat.php'); 
session_start();

    $user_id = $_POST['uid'];
    mysqli_query($sql ,  "
        INSERT INTO friends (`fid`, `fmyid`) 
        VALUES        (null , '$user_id')
    ");
        
    mysqli_close( $sql );
        //if (mysqli_query($sql)) {
        //    echo "Friend added successfully.";
        //} else {
        //    echo "Error adding friend.";
        //}
?>
