<?php
    print_r( $_POST ) ;

    
    if ( $_POST['fname']=="")
    die("<script> alert('Nem adtál meg felhasználónevet')</script>");

    if ( $_POST["email"]=="")
    die("<script> alert('Nem adtál meg Email címet')</script>");

    if ( $_POST["pass"]=="")
    die("<script> alert('Nem adtál meg jelszót')</script>");


	
    include( "kapcsolat.php" ) ;

    //var_dump($adb);
    $upass = md5($_POST["pass"]);
    mysqli_query( $adb , "

    INSERT INTO user (uid,         uname,          uemail,       upass,    utime  ,  uip, usession, ustat, ucomm, ubirtd) 
    VALUES           (NULL,   '$_POST[fname]', '$_POST[email]', '$upass',    NOW() ,   '',       '',    '',    '',     '');

    
    " );
    mysqli_close( $adb );
?>