<?php
$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'szb_registration';

$adb = mysqli_connect($host, $db_user, $db_pass, $db_name);

if (!$adb) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
