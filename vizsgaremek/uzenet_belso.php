<?php
$adb = mysqli_connect("localhost", "root", "", "szb_registration");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['uzi']) && !empty($_POST['uzi'])) {
        $uzi = $_POST['uzi'];

        $sql = "INSERT INTO uzenetek (uID, uDate, uEmail, uUzenet) VALUES (NULL, NOW(), 'users.uemail', ?)";
        $stmt = $adb->prepare($sql);
        $stmt->bind_param("s", $uzi);

        if ($stmt->execute()) {
            echo "Üzenet sikeresen mentve.";
        } else {
            echo "Hiba történt: " . $adb->error;
        }
    } else {
        echo "Nem érkezett üzenet.";
    }

    // Fájl mentése
    if (isset($_FILES['fajl']) && $_FILES['fajl']['error'] === 0) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["fajl"]["name"]);

        if (move_uploaded_file($_FILES["fajl"]["tmp_name"], $targetFile)) {
            echo "Fájl sikeresen feltöltve: " . $targetFile;
        } else {
            echo "Hiba történt a fájl feltöltésekor.";
        }
    }
}
?>
