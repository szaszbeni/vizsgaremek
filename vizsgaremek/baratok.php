<?php
require ('kapcsolat.php');
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barátok hozzáadása</title>
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
            <input type="text" id="search-name" placeholder="Felhasználónév" onkeyup="filterUsers()">
            <input type="text" id="search-id" placeholder="Felhasználó ID" onkeyup="filterUsers()">
            <img src="./profilkepek/<?php echo htmlspecialchars($_SESSION['profilkep']); ?>" alt="Profilkép">
        </div>
    </section>

    <h2>Users</h2>
    <div id="user-list">
        <?php
        $email = $_SESSION["uname"];
        $osszes = mysqli_query($adb, "SELECT uid, uname, ustat FROM user WHERE uid != '$_SESSION[uid]'");

        while ($sor = mysqli_fetch_assoc($osszes)) {
            $status_class = strtolower($sor['ustat']);
            echo "<div class='user' data-username='{$sor['uname']}' data-userid='{$sor['uid']}'>";
            echo "<p>{$sor['uname']}</p>";
            echo "<span class='status $status_class'>{$sor['ustat']}</span>";
            echo "<button onclick='addFriend({$sor['uid']})'>Add Friends</button>";
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
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
                updateFriendList();
            });
        }

        function updateFriendList() {
            fetch('belsolap.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('baratok').innerHTML = data;
            });
        }

        function filterUsers() {
            let nameInput = document.getElementById("search-name").value.toLowerCase();
            let idInput = document.getElementById("search-id").value;
            let users = document.querySelectorAll(".user");

            users.forEach(user => {
                let username = user.getAttribute("data-username").toLowerCase();
                let userid = user.getAttribute("data-userid");

                if ((nameInput === "" || username.includes(nameInput)) &&
                    (idInput === "" || userid.includes(idInput))) {
                    user.style.display = "flex";
                } else {
                    user.style.display = "none";
                }
            });
        }
    </script>

</body>
</html>
