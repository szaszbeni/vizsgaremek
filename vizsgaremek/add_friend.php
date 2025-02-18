<?php
require ('kapcsolat.php'); // Külön fájl az adatbázis kapcsolathoz
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fid'])) {
    $user_id = $_SESSION['uid'];
    $friend_id = intval($_POST['fid']);
    
    // Ellenőrizzük, hogy már barátok-e
    $check_query = "SELECT * FROM friends WHERE uid = ? AND fid = ?";
    $stmt = mysqli_prepare($adb, $check_query);
    mysqli_stmt_bind_param($stmt, 'ii', $user_id, $friend_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    
    if (mysqli_stmt_num_rows($stmt) > 0) {
        echo "Already friends.";
    } else {
        // Ha még nem barátok, akkor hozzáadjuk az adatbázishoz
        $insert_query = "INSERT INTO friends (uid, fid) VALUES (?, ?)";
        $stmt = mysqli_prepare($adb, $insert_query);
        mysqli_stmt_bind_param($stmt, 'ii', $user_id, $friend_id);
        if (mysqli_stmt_execute($stmt)) {
            echo "Friend added successfully.";
        } else {
            echo "Error adding friend.";
        }
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Invalid request.";
}
?>
