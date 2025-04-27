<?php
require ('kapcsolat.php');
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barátok hozzáadása</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap-icons.css" rel="stylesheet">
        <link href="tooplate-kool-form-pack.css" rel="stylesheet">
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
            <?php if (isset($_SESSION['profilkep'])): ?>
                <img src="./profilkepek/<?php echo htmlspecialchars($_SESSION['profilkep']); ?>" alt="Profilkép">
            <?php endif; ?>

            <h2>Barátok listája</h2>
            <div id="baratok">
                <!-- Ide kerül majd a frissített barátlista -->
            </div>

        </div>
    </section>

    <h2>Users</h2>
    <div id="user-list">
        <?php
        $email = $_SESSION["uname"];
        $userid = intval($_SESSION['uid']);
        $osszes = mysqli_query($adb, "SELECT uid, uname, ustat FROM user WHERE uid != $userid");


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
                updateFriendList(); // Frissítjük a barátok listáját
            });
        }

        function updateFriendList() {
            fetch('list_friends.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('baratok').innerHTML = data;  // Itt kell frissíteni a barátok listáját
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
