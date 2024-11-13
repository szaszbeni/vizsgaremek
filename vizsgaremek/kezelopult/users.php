<?php
$adb = mysqli_connect( "localhost", "root", "", "szb_registration" );

$query = "SELECT * FROM user";
$result = mysqli_query($adb, $query);

if (!$result) {
    echo "Hiba történt az adatok lekérdezésekor.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felhasználók</title>
    <style>
       body{
        
       }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #ddd;
        }
        h1{
            text-align: center ;
        }
    </style>
</head>
<body>
    <h1>Felhasználók listája</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Regisztráció dátuma</th>
                
                
                
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['uid']) . "</td>";
                echo "<td><a href='adatlap_form1.php?uid=" . urlencode($row['uid']) . "'>" . htmlspecialchars($row['uname']) . "</a></td>";
                echo "<td>" . htmlspecialchars($row['uemail']) . "</td>";
                echo "<td>" . htmlspecialchars($row['utime']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>