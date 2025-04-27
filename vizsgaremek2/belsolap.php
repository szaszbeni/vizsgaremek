<?php
require('kapcsolat.php');

if (!isset($_SESSION["uname"])) {
    echo "Nincs bejelentkezett felhasználó!";
    exit();
}

$email = $_SESSION["uname"];
?>

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
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
    .chat-header {
        align-items: center;
        background-color: #2f3136;
    }
    #input-box {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 8px;
        font-size: 15px;
        background-color: #40444b;
        color: #dcddde;
        margin-bottom: 10px;
    }
    #input-box::placeholder {
        color: #b9bbbe;
    }
    #send-btn {
        background-color: #5865f2;
        color: white;
        border: none;
        padding: 12px;
        font-size: 20px;
        cursor: pointer;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        align-self: flex-end;
        transition: background-color 0.2s;
    }
    #send-btn:hover {
        background-color: #4752c4;
    }
    #leir {
        padding: 10px;
        background-color: #2f3136;
        border: 1px solid #202225;
        border-radius: 8px;
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
            <div id="baratok"></div>
            </div>
          </td>
          <td id="masodik">
            <form method="POST" action="belsolap.php" enctype="multipart/form-data" target="kisablak">
              <div class="chat-header">
                <div id="chat-box">
                  <?php
                  if (isset($_GET["fname"])) {
                      $friend_name = mysqli_real_escape_string($adb, $_GET["fname"]);
                      $sql = "SELECT uDate, uEmail, uUzenet FROM uzenetek WHERE 
                              (uEmail = '$email' AND recipient = '$friend_name') 
                              OR (uEmail = '$friend_name' AND recipient = '$email')";
                      $result = mysqli_query($adb, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                          echo "<div><b>{$row['uDate']}</b><br><b>{$row['uEmail']}:</b> {$row['uUzenet']}</div>";
                      }
                  }
                  ?>
                </div>
                <textarea id="input-box" rows="8" name="uzi" placeholder="Írj valamit..."></textarea>
                <input type="file" name="fajl">
                <button id="send-btn" name="send" type="submit">➤</button>
              </div>
            </form>
          </td>
          <td id="harmadik">
            <div id="leir" class="col-md-3">
              <h4>Információ</h4>
              <?php
                if (isset($_GET["fname"])) {
                    $friend_name = mysqli_real_escape_string($adb, $_GET["fname"]);
                    // SQL lekérdezés a barát adataira
                    $sql_info = "SELECT * FROM user, friends WHERE uname= '$friend_name'";
                    $result_info = mysqli_query($adb, $sql_info);

                    if ($result_info && mysqli_num_rows($result_info) > 0) {
                        $friend_info = mysqli_fetch_assoc($result_info);
                        echo "<p><b>Barát neve:</b> {$friend_info['uname']}</p>";
                        echo "<p><b>Felhasználó ID:</b> {$friend_info['uid']}</p>";
                        echo "<p><b>Email:</b> {$friend_info['uemail']}</p>";
                        echo "<p><b>About me:</b> {$friend_info['uabout']}</p>";
                    } else {
                        echo "<p>Nincs találat a lekérdezésre.</p>";
                    }
                } else {
                    echo "<p>Nincs kiválasztva barát.</p>";
                }
                ?>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <script>
            function loadNotifications() {
              fetch('get_notifications.php')
              .then(response => response.json())
              .then(data => {
                  const container = document.getElementById('ertesitesek');
                  container.innerHTML = '';

                  data.forEach(notif => {
                      const div = document.createElement('div');
                      div.style.marginBottom = '10px';
                      div.innerHTML = `
                          <p>${notif.emessage}</p>
                          ${notif.etype === 'friend_request' ? `<button onclick="acceptFriend(${notif.eid})">Elfogadom</button>` : ''}
                      `;
                      container.appendChild(div);
                  });
              });
            }

            function acceptFriend(notificationId) {
                fetch('accept_friend.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: 'notification_id=' + notificationId
                })
                .then(response => response.text())
                .then(data => {
                    alert(data);
                    loadNotifications();
                });
            }

            setInterval(loadNotifications, 5000); // 5 másodpercenként frissít
            window.onload = loadNotifications;
          </script>
  <script src="chat.js"></script>
</body>
</html>
