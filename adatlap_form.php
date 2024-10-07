<h2>Adatlapom</h2>
<?php
    include('kapcsolat.php');
    $user = mysqli_fetch_array(mysqli_query( $adb, "SELECT * FROM user WHERE uid='$_SESSION[uid]'"));
?>

<form action='adatlap_ir.php' method='post' target='kisablak' style='margin-left:  35%;'>
    <input type='hidden' name='uid' value='<?=$user['uid'];?>'><br>
    <label for='fname'>valami name:</label>
    <input type='text' id='fname' name='fname' value='<?=$user['uname'];?>' maxlength=100><br>
    <label for='email'>Email:</label>
    <input type='text' id='email' name='email' value='<?=$user['uname'];?>' maxlength=250><br>
    <input type='submit' value='Modositas'>
</form>