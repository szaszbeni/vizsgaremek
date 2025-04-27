<?php
require('kapcsolat.php');
session_start();

if (!isset($_SESSION["uid"])) {
    exit();
}

$uid = intval($_SESSION["uid"]);

$friends = mysqli_query($adb, "SELECT u.uid, u.uname 
    FROM user u
    JOIN friends f ON (f.fname = u.uid OR f.fmyname = u.uid)
    WHERE (f.fname = '$uid' OR f.fmyname = '$uid') AND u.uid != '$uid' AND f.fStatus = 1");

if (!$friends) {
    die('Query Error: ' . mysqli_error($adb));
}

while ($row = mysqli_fetch_assoc($friends)) {
    echo "<li>" . htmlspecialchars($row['uname']) . "</li>";
}
?>
