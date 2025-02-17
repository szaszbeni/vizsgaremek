<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Friends</title>
    <style>
        body {
            color: white;
            margin-top: 10%;
            background-color: #121212;
        }
        .user {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            border-bottom: 1px solid #444;
        }
        .status {
            font-weight: bold;
        }
        .online { color: green; }
        .offline { color: red; }
        .away { color: orange; }
    </style>
</head>
<body>
    <h1>Add Friends</h1>
    <section>
        <div>
            <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Username" required><br>
            <input type="text" name="id" id="id" class="form-control" placeholder="ID" required>
            <img src="./profilkepek/<?php echo htmlspecialchars($_SESSION['profilkep']); ?>" alt="Profile Picture">
        </div>
    </section>
    <h2>Users</h2>
    <div>
        <?php
        require ('kapcsolat.php');
        $osszes = mysqli_query($adb, "SELECT uid, uname, status FROM user WHERE uid != '$_SESSION[uid]'");
        
        while ($sor = mysqli_fetch_assoc($osszes)) {
            $status_class = strtolower($sor['status']); // Online, Offline, Away
            echo "<div class='user'>";
            echo "<p>$sor[uname]</p>";
            echo "<span class='status $status_class'>$sor[status]</span>";
            echo "<button onclick='addFriend($sor[uid])'>Add Friend</button>";
            echo "</div>";
        }
        ?>
    </div>
    
    <script>
        function addFriend(friendId) {
            fetch('add_friend.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'friend_id=' + friendId
            }).then(response => response.text())
              .then(data => alert(data));
        }
    </script>
</body>
</html>
