<?php
include("kapcsolat.php");

// Ellenőrizd, hogy a felhasználó be van-e jelentkezve
if (!isset($_SESSION['uid'])) {
    die("<script>alert('Kérjük, jelentkezzen be!'); window.location.href = './login_form.php';</script>");
}

// A jelszó és a megerősítés megkapása
$newPassword = trim($_POST['new_pass']);
$confirmPassword = trim($_POST['confirm_pass']);
$userId = $_POST['uid'];

// Ellenőrizd, hogy a két jelszó megegyezik-e
if ($newPassword !== $confirmPassword) {
    die("<script>alert('A jelszavak nem egyeznek!'); window.history.back();</script>");
}

// A jelszó titkosítása
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

// SQL lekérdezés előkészítése
$query = "UPDATE user SET upass = ? WHERE uid = ?";
$stmt = mysqli_prepare($adb, $query);

// Ha nem sikerül előkészíteni az SQL lekérdezést
if (!$stmt) {
    die("<script>alert('SQL előkészítési hiba: " . mysqli_error($adb) . "'); window.history.back();</script>");
}

// A jelszó és a felhasználó azonosító paraméterek hozzárendelése
mysqli_stmt_bind_param($stmt, "si", $hashedPassword, $userId);

// SQL végrehajtása
if (mysqli_stmt_execute($stmt)) {
    // Ha sikeres a módosítás, frissítjük a session jelszót is
    $_SESSION['upass'] = $newPassword; // Új jelszó mentése a session-be (nem szükséges hashelt jelszó, csak a bejelentkezéshez)
    
    echo "<script>alert('Jelszó sikeresen módosítva!'); window.location.href = './login_form.php';</script>";
} else {
    // Ha nem sikerült végrehajtani az SQL lekérdezést
    echo "<script>alert('SQL végrehajtási hiba: " . mysqli_stmt_error($stmt) . "'); window.history.back();</script>";
}

// Lekérdezés lezárása és kapcsolat bezárása
mysqli_stmt_close($stmt);
mysqli_close($adb);
?>
