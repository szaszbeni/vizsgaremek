<?php
    session_start() ;

    print_r( $_POST ) ;

    include("kapcsolat.php");

    $pw = md5( $_POST["pass"]);

    $userek = mysqli_query( $adb ,"
     SELECT * 
     FROM user 
     WHERE (uemail='$_POST[email]' OR uname='$_POST[email]') AND upass='$pw'");


    if ( mysqli_num_rows( $userek ) == 0) {
        print "<script> alert('hibás belépési adatok!') </script>" ;
    }
    else{
        $user = mysqli_fetch_array($userek) ;
        $_SESSION["uid"] = $user["uid"] ;
        $_SESSION["uname"] = $user["uname"] ;
    }

    mysqli_close( $adb );


    print '<script> parent.location.href = "./" </script>' ;

?>