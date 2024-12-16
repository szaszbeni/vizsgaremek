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
    <link rel="stylesheet" href="vizsga.css">
</head>

<style>
    div#cloeser {
        text-align: right;
    }
</style>
<body>
    <?php 
        require('navbar.php');
    ?>

    <div id="cloeser">
        <span id="login"></span>
        <?php
        if (!isset($_SESSION["uid"])) {
            print '<input type="button" value="Belépés" onclick="location.href=\'./?p=login\'">';
        } else {
            $userQuery = mysqli_query($adb, "SELECT * FROM user WHERE uid='" . $_SESSION['uid'] . "'");
            $user = mysqli_fetch_array($userQuery);

            if ($user['uproffkepnev'] != "") {
                $profilkep = "./profilkepek/" . $user['uproffkepnev'];
            } else {
                $profilkep = "alaprofilkep.png";
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
        else include("404_belso.php");
    }
    ?>

    <iframe name="kisablak"></iframe>

</body>
</html>

<?php
    mysqli_close($adb);
?>
