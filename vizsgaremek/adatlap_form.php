    <title>Adatlap</title>
    
    <link rel="stylesheet" href="vizsga.css">

<?php
  $user = mysqli_fetch_array(mysqli_query( $adb, "SELECT * FROM user WHERE uid='$_SESSION[uid]'"));
?>

<form action='adatlap_ir.php' method='post' target='kisablak' class='reglog' enctype='multipart/form-data'>
    <h1>Adatlapom</h1>
    <input type='hidden' name='uid' value='<?=$user['uid'];?>'><br>
    <h2 for='uname'>Nickname:</h2>
    <input type='text' id='uname' name='uname' value='<?=$user['uname'];?>' maxlength=100><br>
    <h2 for='uemail'>Email:</h2>
    <input type='text' id='uemail' name='uemail' value='<?=$user['uemail'];?>' maxlength=250><br>
    <input type="button" value="Jelszavam modositasa" onclick="location.href='jelszo_form.php'"><br><br>
    <span>Uj profilkép:</span><input type="file" name='uproffkep'><br>
    <input type='submit' value='Modositas'>
</form>