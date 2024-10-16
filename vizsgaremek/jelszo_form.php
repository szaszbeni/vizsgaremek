<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jelszo modositasa</title>

    <style>
        form {
    background-color: #3d3c4d;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    color: #c4c4c4;
}

form input[type="password"] {
    width: 100%;
    padding: 5px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #000000;
    color: #ccc;
}

form input[type="checkbox"] {
    margin-right: 10px;
}

form label {
    font-weight: bold;
    display: block;
}

form input[type="submit"] {
    background-color: #410000;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    margin-top: 10px;
}

form input[type="submit"]:hover {
    background-color: #000000;
}

form inout[type="result"] {
    margin-left: 20px;
    font-family: Cambria, Cochin;
}

nav ul li {
    display: inline;
    margin: 0 15px; 
}

nav ul li a {
    color: Black; 
    text-decoration: none; 
    font-weight: bold; 
}
    </style>
</head>
<body>
<header is="fejlec">
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
    <form action='jelszo_ir.php' method='post' target='kisablak' style='margin-left:  35%;'>
        <input type='hidden' name='uid' value='<?=$user['uid'];?>'><br>
        <label for='uname'>Jelszo modositasa:</label>
        <input type='password' id='upass' name='upass' value='<?=$user['upass'];?>' maxlength=100><br>
        <label for='uname'>Jelszo megerositese:</label>
        <input type='password' id='upass' name='upass' value='<?=$user['upass'];?>' maxlength=100><br>
        <input type='submit' value='Modositas'>
    </form>
</body>
</html>