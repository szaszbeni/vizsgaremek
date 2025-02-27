<?php

    session_start();
    include("kapcsolat.php");

    $ip = $_SERVER['REMOTE_ADDR'];
    $sess = substr(session_id(), 0, 8);
    if (isset($_SESSION['uid'])) $uid = $_SESSION['uid'];
    else $uid = 0;
    $url = $_SERVER['REQUEST_URI'];

    mysqli_query($adb, "
        INSERT INTO note (nid, ndate, nip, nsession, nuid, nurl)
        VALUES (NULL, NOW(), '$ip', '$sess', '$uid', '$url')
    ");

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-icons.css" rel="stylesheet">
    <link href="tooplate-kool-form-pack.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="vizsga.css">-->
</head>

<style>
</style>
<body>
<?php 
require('navbar.php');

if (isset($_SESSION["uid"])) {
    $userQuery = mysqli_query($adb, "SELECT * FROM user WHERE uid='" . $_SESSION['uid'] . "'");
    $user = mysqli_fetch_array($userQuery);

    if ($user['uproffkepnev'] != "") {
        $_SESSION['profilkep'] = $user['uproffkepnev']; // SESSION-ben tároljuk
    } else {
        $_SESSION['profilkep'] = "alaprofilkep.png"; // Alapértelmezett kép beállítása
    }
}
?>

    </div>  

    <?php
    if (isset($_GET['p'])) {
        $p = $_GET['p'];
    } else {
        $p = "";
    }

    if (!isset($_SESSION['uid'])) {
        if ($p == "") include("kezdolap.php");
        else if ($p == "regisztracio") include("reg_form.php");
        else if ($p == "login") include("login_form.php");
        else if ($p == "kulso") include("404_kulso.php");
        else if ($p == "contact") include("contact.php");
        else include("404.html");
    } else {
        if ($p == "") include("belsolap.php");
        else if ($p == "adatlapom") include("adatlap_form.php");
        else if ($p == "jelszo") include("jelszo_form.php");
        else if ($p == "baratok") include("baratok.php");
        else if ($p == "contact") include("contact.php");
        else include("404_belso.php");
    }
    ?>
    
    <iframe name="kisablak"></iframe>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/init.js"></script>
    
   

</body>
</html>

