<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Üzenőfal</title>
  <style>
    body {
      background-color: #121212;
      color: white;
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    .blokk {
      border: 1px solid #555;
      padding: 15px;
      margin-bottom: 20px;
      border-radius: 8px;
      background-color: #1e1e1e;
    }
    .belsoCim {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }
    .belsoSzoveg {
      font-size: 1.1rem;
      margin-bottom: 10px;
    }
    .belsoDatum {
      font-size: 0.9rem;
      color: #aaa;
    }
    .uzenofalKep {
      max-width: 100%;
      height: auto;
      margin-top: 10px;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<h1 id="uzenoCim">Üzenőfal</h1>
<br>

<?php
include('../kapcsolat.php');
$adatok = mysqli_query($adb, "
SELECT uzenoCim, uzenoName,	uzenoSzoveg,	uzenoDatum,	uzenoKep	
FROM uzenofal
ORDER BY uzenoDatum DESC;
");

while($row = $adatok->fetch_assoc()):
?>
<div class="blokk">
    <h4 class="belsoCim"><strong><?php echo htmlspecialchars($row["uzenoCim"]); ?></strong> - <?php echo htmlspecialchars($row["uzenoName"]); ?></h4>
    <p class="belsoSzoveg"><?php echo nl2br(htmlspecialchars($row["uzenoSzoveg"])); ?></p>
    <p class="belsoDatum"><small><em><?php echo $row["uzenoDatum"]; ?></em></small></p>
    <?php if (!empty($row["uzenoKep"])): ?>
        <img src="../<?php echo str_replace('C:/xampp/htdocs/vizsgaremek/', '', $row["uzenoKep"]); ?>" class="uzenofalKep">
    <?php endif; ?>
</div>
<?php endwhile; ?>

</body>
</html>
