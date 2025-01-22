<!DOCTYPE html>

<?php
$adb = mysqli_connect( "localhost", "root", "", "szb_registration" );

$query = "SELECT * FROM user";
$result = mysqli_query($adb, $query);

if (!$result) {
    echo "Hiba történt az adatok lekérdezésekor.";
    exit;
}
?>

<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hibajelentés</title>
  <link rel="stylesheet" href="styles.css">
</head>

<style> 


.container {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 500px;
}

h1 {
  text-align: center;
  color: #333;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-top: 10px;
  font-size: 1.1em;
  color: #555;
}

input, textarea {
  margin-top: 5px;
  padding: 10px;
  font-size: 1em;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  margin-top: 20px;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  font-size: 1em;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

</style>
<body>
  <div class="container">
    <h1>Hibajelentések</h1>
  </div>
</body>
</html>
