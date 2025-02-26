<?php
session_start();
require('kapcsolat.php');

$name = isset($_POST['name']) ? mysqli_real_escape_string($adb, $_POST['name']) : '';
$id = isset($_POST['id']) ? mysqli_real_escape_string($adb, $_POST['id']) : '';

$query = "SELECT uid, uname, ustat FROM user WHERE uid != '$_SESSION[uid]'";

if (!empty($name)) {
    $query .= " AND uname LIKE '%$name%'";
}
if (!empty($id)) {
    $query .= " AND uid LIKE '%$id%'";
}

$result = mysqli_query($adb, $query);

while ($sor = mysqli_fetch_assoc($result)) {
    $status_class = strtolower($sor['ustat']);
    echo "<div class='user'>";
    echo "<p>$sor[uname]</p>";
    echo "<span class='status $status_class'>$sor[ustat]</span>";
    echo "<button onclick='addFriend($sor[uid])'>Add Friend</button>";
    echo "</div>";
}
?>
