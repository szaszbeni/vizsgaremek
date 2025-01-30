<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat Weboldal</title>
  <link rel="stylesheet" href="vizsga.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap-icons.css" rel="stylesheet">
  <link href="tooplate-kool-form-pack.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #36393f;
        color: #dcddde;
        margin-top: 100px;
    }
    table {
        width: 100%;
        height: 100vh;
        border-collapse: collapse;
    }
    td {
        vertical-align: top;
        padding: 10px;
    }
    #elso, #harmadik {
        width: 25%;
        background-color: #2f3136;
        border-right: 1px solid #202225;
    }
    #masodik {
        width: 50%;
        background-color: #36393f;
    }
    ul#baratok {
        list-style: none;
        padding: 0;
    }
    ul#baratok li {
      padding: 12px;
      cursor: pointer;
      border-bottom: 1px solid #ddd;
      transition: background-color 0.3s;
    }
    ul#baratok li:hover {
        background-color: #4b4f55;
    }
    #chat-box {
      width: 100%;
      height: 400px;
      padding: 10px;
      background-color: #36393f;
      border-radius: 8px;
      border: 1px solid #ddd;
      overflow-y: auto;
      margin-bottom: 15px;
    }
    #input-box {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 16px;
      resize: none;
    }
    #send-btn {
      background-color: #4e73df;
      color: white;
      border: none;
      padding: 15px;
      font-size: 20px;
      cursor: pointer;
      border-radius: 50%;
      margin-top: 10px;
      display: block;
      width: 60px;
      height: 60px;
      margin-left: auto;
      margin-right: auto;
      transition: background-color 0.3s;
    }
    #send-btn:hover {
        background-color: #4752c4;
    }
    #leir {
        padding: 10px;
        background-color: #2f3136;
        border: 1px solid #202225;
        border-radius: 5px;
    }
    h4 {
        color: #ffffff;
    }
    p {
        color: #b9bbbe;
    }
</style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <table>
        <tr>
          <td id="elso">
            <div class="col-md-3">
              <ul id="baratok">
                <li>Barát 1</li>
                <li>Barát 2</li>
                <li>Barát 3</li>
                <li>Barát 4</li>
              </ul>
            </div>
          </td>
          <td id="masodik">
            <form action='uzenet_belso.php' method='post' target='kisablak' enctype='multipart/form-data'>
              <div class="col-md-6">
                <div id="chat-box">
<?php
$adb = mysqli_connect("localhost", "root", "", "szb_registration");

if ($adb) {
    $sql = "SELECT uDate, uEmail, uUzenet FROM uzenetek ORDER BY uDate DESC";
    $result = $adb->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $date = $row["uDate"];
            $email = $row["uEmail"];
            $message = $row["uUzenet"];
            echo "<div>
                    <div><b>Dátum:</b> {$date}</div>
                    <div><b>Email:</b> {$email}</div>
                    <hr>
                    <div><b>Üzenet:</b> {$message}</div>
                  </div><br>";
        }
    } else {
        echo "Nincsenek üzenetek.";
    }
} else {
    echo "Nem sikerült kapcsolódni az adatbázishoz.";
}
?>
                </div>
                <textarea id="input-box" rows="8" name="uzi" placeholder="Írj valamit..."></textarea>
                <input type='file' name='fajl'>
                <button id="send-btn" name="gomb" value="go" type="submit">↑</button>
              </div>
            </form>
          </td>
          <td id="harmadik">
            <div id="leir" class="col-md-3">
              <h4>Információ</h4>
              <p>az adott felhasznalo fiokja es stbbbbbbbbbbbbbbbbbbbbb</p>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>
