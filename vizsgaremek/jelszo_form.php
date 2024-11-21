    <title>jelszo modositasa</title>

    <link rel="stylesheet" href="vizsga.css">

    </style>
<header id="fejlec">
        <nav id="nav">
            <ul id="links">
                <li><a href="login_form.php">Bejelentkezes</a></li>
                <li><a href="reg_form.php">Regisztracio</a></li>
            </ul>
        </nav>
    </header>
<?php
    include('kapcsolat.php');
    $user = mysqli_fetch_array(mysqli_query( $adb, "SELECT * FROM user WHERE uid='$_SESSION[uid]'"));
?>
    <form action='jelszo_ir.php' method='post' target='kisablak'>
        <input type='hidden' name='uid' value='<?=$user['uid'];?>'><br>
        <h2 for='uname'>Jelszo modositasa:</h2>
        <input type='password' id='upass' name='upass' value='<?=$user['upass'];?>' maxlength=100><br>
        <h2 for='uname'>Jelszo megerositese:</h2>
        <input type='password' id='upass' name='upass' value='<?=$user['upass'];?>' maxlength=100><br>
        <input type='submit' value='Modositas'>
    </form>