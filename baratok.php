<?php

    $osszes = mysqli_query( $adb, "SELECT * FROM user WHERE uid != '$_SESSION[uid]'");

    while ($sor = mysqli_fetch_assoc($osszes)){
        print " $sor[uname] <br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Friends</h1>
    <section>
        <div>
            <p>Name:</p>
            <p>Id:</p>
            <img src="'./profilkepek/<?php echo htmlspecialchars($_SESSION['profilkep']); ?>'" alt="profkep">
            <p>Online/Offline/Away</p>
        </div>
    </section>
</body>
</html>