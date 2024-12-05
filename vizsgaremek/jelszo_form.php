<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jelszó módosítása</title>
    <link rel="stylesheet" href="vizsga.css">
</head>
<body>
<header id="fejlec">
    <nav id="nav">
        <ul id="links">
            <li><a href="login_form.php">Bejelentkezés</a></li>
            <li><a href="reg_form.php">Regisztráció</a></li>
        </ul>
    </nav>
</header>

<?php
session_start();
include('kapcsolat.php');

if (!isset($_SESSION['uid'])) {
    die("<script>alert('Kérjük, jelentkezzen be!');</script>");
}

$userQuery = "SELECT * FROM user WHERE uid = ?";
$stmt = mysqli_prepare($adb, $userQuery);
mysqli_stmt_bind_param($stmt, "i", $_SESSION['uid']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && $user = mysqli_fetch_array($result)) {
    // Felhasználó adatai betöltve
} else {
    die("<script>alert('Nem található a felhasználó!');</script>");
}

mysqli_stmt_close($stmt);
?>

<form action="jelszo_ir.php" method="post">
    <input type="hidden" name="uid" value="<?= htmlspecialchars($user['uid']); ?>"><br>

    <h2>Jelszó módosítása:</h2>

    <label for="current_password">Jelenlegi jelszó:</label><br>
    <input type="password" id="current_password" name="current_password" maxlength="100" required><br><br>

    <label for="new_password">Új jelszó:</label><br>
    <input type="password" id="new_password" name="new_password" maxlength="100" required><br><br>

    <label for="confirm_password">Új jelszó megerősítése:</label><br>
    <input type="password" id="confirm_password" name="confirm_password" maxlength="100" required><br><br>

    <input type="submit" value="Módosítás">
</form>

</body>
</html>
