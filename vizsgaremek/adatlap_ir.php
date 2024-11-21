<?php
    session_start();

    print_r( $_POST ) ;

    print "<hr>";
    print_r( $_FILES);

    include( "kapcsolat.php" ) ;

    $kepnev  = $_SESSION['uid'] . "_" . date("ymdHis") . "_" . randomstring(10) ; 
    $kepadat = $_FILES['uproffkep'] ;
    if ($kepadat['type']=="image/jpeg") $kiterj = ".jpg"; else
    if ($kepadat['type']=="image/png") $kiterj = ".png"; else
    die( "<script> alert('A kep csak jpeg vagy png lehet.') </script>");

    $kepnev .= $kiterj ;

    move_uploaded_file( $kepadat['tmp_name'], "./profilkepek/" . $kepnev );

    $eredetikepnev = $kepadat['name'];

    print "<br>". $kepnev;

    if ($_POST['uname']=="") die("<script> alert('Nick name')</script>");

    mysqli_query( $adb, "
    UPDATE user
    SET uname =  '$_POST[uname]' ,
        uemail = '$_POST[uemail]',
        uproffkepnev = '$kepnev',
        uproffkeperedetinev = '$eredetikepnev'
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