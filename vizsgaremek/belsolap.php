<link rel="stylesheet" href="vizsga.css">

<?php
    $user = mysqli_fetch_array(mysqli_query( $adb, "SELECT * FROM user WHERE uid='$_SESSION[uid]'"));
?>
<h1>belsolap</h1>