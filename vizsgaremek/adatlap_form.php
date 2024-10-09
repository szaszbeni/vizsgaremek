<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adatlap</title>
    <style>
        
        form {
    background-color: #3d3c4d;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    color: #c4c4c4;
}
form input[type="text"]{
    width: 100%;
    padding: 5px;
    margin-top:15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #000000;
    color: #ccc;
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
nav ul li {
    display: inline;
    margin: 15px; 
}

nav ul li a {
    color: white; 
    text-decoration: none; 
    font-weight: bold; 
    color:Black;
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

<form action='adatlap_ir.php' method='post' target='kisablak' style='margin-left:  35%;'>
    <h2>Adatlapom</h2>
    <input type='hidden' name='uid' value='<?=$user['uid'];?>'><br>
    <label for='uname'>Nickname:</label>
    <input type='text' id='uname' name='uname' value='<?=$user['uname'];?>' maxlength=100><br>
    <label for='uemail'>Email:</label>
    <input type='text' id='uemail' name='uemail' value='<?=$user['uemail'];?>' maxlength=250><br>
    <input type="button" value="Jelszavam modositasa" onclick="location.href='jelszo_form.php'"><br>
    <input type='submit' value='Modositas'>
</form>
</body>
</html>
