    <title>Adatlap</title>
    
    <link rel="stylesheet" href="vizsga.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap-icons.css" rel="stylesheet">
  <link href="tooplate-kool-form-pack.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


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