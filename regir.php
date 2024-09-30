<?php
    print_r($_POST);

    if ($_POST['fname']=="") {
         die("<script> alert('Nem adtal meg felhasznalonevet!')</script>");
    }
    if ($_POST['email']=="") {
        die("<script> alert('Nem adtal meg emailt!')</script>");
    }
    if ($_POST['password']=="") {
        die("<script> alert('Nem adtal meg jelszot!')</script>");
    }

    $adb = mysqli_connect("localhost", "root", "", "szb_registration");

    var_dump( $adb );

    $upass = md5($_POST[password]);
    mysqli_query( $adb , "
    INSERT INTO user ( uid, uname, uemail, upass, utime, uip, usession, ustat, ucomm, ubirtd) 
    VALUES           (NULL, '$_POST[fname]', '$_POST[email]', '$upass', NOW(), '', '', '', '', '')
   
    " );

    mysqli_close( $adb );
?>