<?php
    session_start();
    print_r( $_POST ) ;

    include( "kapcsolat.php" ) ;

    if ($_POST['uname']=="") die("<script> alert('Nick name')</script>");

    mysqli_query( $adb, "
    UPDATE user
    SET uname =  '$_POST[uname]' ,
        uemail = '$_POST[uemail]' 
    WHERE uid = '$_POST[uid]'
    ");

    $_SESSION['uname'] = $_POST['uname'];

    print "
        <script>
        alert('Adataid modositva')
        </script>
    ";

    mysqli_close( $adb );
?>