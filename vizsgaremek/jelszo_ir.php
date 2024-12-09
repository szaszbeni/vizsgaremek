<?php
session_start();
include("kapcsolat.php");



$newPassword = $_POST['upass'];
$userId = $_POST['uid'];

// A jelszó hashelése
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

// Előkészített SQL lekérdezés a biztonság érdekében
$query = "UPDATE user SET upass = ? WHERE uid = ?";
$stmt = mysqli_prepare($adb, $query);
if (!$stmt) {
    die("<script>alert('Hiba az adatbázis előkészítésében!');</script>");
}

// Paraméterek kötése és végrehajtás
mysqli_stmt_bind_param($stmt, "si", $hashedPassword, $userId);
if (mysqli_stmt_execute($stmt)) {
    $_SESSION['upass'] = $newPassword; // Csak demonstrációs célból! Valós helyzetben nem tároljuk a jelszót nyílt szövegként.
    echo "<script>alert('Jelszó sikeresen módosítva!');</script>";
} else {
    echo "<script>alert('Hiba történt a módosítás során!');</script>";
}

// Nyitott erőforrások lezárása
mysqli_stmt_close($stmt);
header("Location: ./login_form.php");
mysqli_close($adb);
?>
