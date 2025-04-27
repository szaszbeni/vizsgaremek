<?php
    $adb = mysqli_connect("localhost", "root", "", "szb_registration");
    if (!$adb) {
        die("<script>alert('Nem sikerült csatlakozni az adatbázishoz: " . mysqli_connect_error() . "');</script>");
    }

    // function randomstring($h)
    // {
	// $c = "0123456789abcdefghijklmnopqrstuvwxyz" ;
	// $s = "" ;
	// for( $i=0; $i<$h; $i++ )  $s .= substr( $c , rand(0,strlen($c)-1) , 1 ) ;
	// return $s ;
    // }
?>

