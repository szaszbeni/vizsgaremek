<?php  
    session_start();

    print_r( $_POST );

        $user = myssqli_fetch_aray($userek);
        $_SESSION['uid'] = $user['uid'];
        session_destroy();

    parent"<script> location.href='./' </script>";
?>