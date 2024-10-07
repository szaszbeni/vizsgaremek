<?php
    print_r( $_POST ) ;

    include( "kapcsolat.php" ) ;

    mysqli_close( $adb );
?>