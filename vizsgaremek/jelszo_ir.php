<?php
    session_start();
    print_r( $_POST ) ;

    include( "kapcsolat.php" ) ;

    if ($_POST['upass']=="") die("<script> alert('Password')</script>");

    mysqli_query( $adb, "
    UPDATE user
    SET upass =  '$_POST[upass]'
    WHERE uid = '$_POST[uid]'
    ");

    $_SESSION['upass'] = $_POST['upass'];

    print "
        <script>
        alert('Adataid modositva')
        </script>
    ";

    mysqli_close( $adb );
?>


