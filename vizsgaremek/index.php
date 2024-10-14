<?php

    session_start() ;
    include("kapcsolat.php");

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<style>

    div#cloeser{
        text-align: right ;
    }

</style>
<body>
    <div id="cloeser">
        <span id="login"></span>
<?php
   if(!isset($_SESSION["uid"])){
    print '<input type="button" value="Belépés" onclick="location.href=\'./?p=login\'">';
    }
    else{
        $user = mysqli_fetch_array(mysqli_query($adb, "
            SELECT * FROM user 
            WHERE uid='$_SESSION[uid]'
        "));

        if ($user['uproffkepnev'] != "") $profilkep = "./profilkepek/$user[uproffkepnev]";
        else $profilkep = "alapprofilkep.jpg";

    print "
        <img src='./profilkepek/$user[uproffkepnev]' style='height:30px; border-radius:50%;'>
        <a href='./?p=adatlapom'> $_SESSION[uname] </a>
        <input type='button' value='Kilépés' onclick='kisablak.location.href=\'logout.php\''>
    ";
    }
        
?>
  </div>  
<?php  

    if (isset ( $_GET['p'])) $p = $_GET['p'];
    else $p = "";

    if( !isset($_SESSION['uid'])) {
        if ( $p == "" ) include("kezdolap.php"); else
        if ( $p == "regisztracio" ) include("reg_form.php"); else
        if ( $p == "login" ) include("login_form.php"); else
        if ($p == "kulso") include("404_kulso.php");
    }
    else {
        if ( $p=="") include("belsolap.php"); else
        if ( $p=="adatlapom") include("adatlap_form.php"); else
        include("404_belso.php");
    }
?>
    <iframe name="kisablak"></iframe>

</body>
</html>

<?php

    mysqli_close($adb);

?>