<?php
session_start();
include("kapcsolat.php");



$newPassword = $_POST['upass'];
$userId = $_POST['uid'];

$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

$query = "UPDATE user SET upass = ? WHERE uid = ?";
$stmt = mysqli_prepare($adb, $query);
if (!$stmt) {
    die("<script>alert('Hiba az adatbázis előkészítésében!');</script>");
}

mysqli_stmt_bind_param($stmt, "si", $hashedPassword, $userId);
if (mysqli_stmt_execute($stmt)) {
    $_SESSION['upass'] = $newPassword; 
    echo "<script>alert('Jelszó sikeresen módosítva!');</script>";
} else {
    echo "<script>alert('Hiba történt a módosítás során!');</script>";
}

mysqli_stmt_close($stmt);
header("Location: ./login_form.php");
mysqli_close($adb);
?>
