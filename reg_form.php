<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="vizsgastyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>

    <header is="fejlec">
        <nav id="nav">
            <ul id="links">
                <li><a href="login_form.php">Bejelentkezes</a></li>
                <li><a href="reg_form.php">Regisztracio</a></li>
            </ul>
        </nav>
        
    </header>

    <form action="reg_ir.php" method="post" target="kisablak" style="margin-left:  35%;">
        <h1>Welcome!</h1>
        <label for="fname">valami name:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>
        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass"><br><br>
        <input type="submit" value="Registration">
        <p id="result"></p>
    </form>

    <script>
        function Udvozles() {
            let fnev = document.getElementById("fname").value;
            let email = document.getElementById("email").value;
            let jelszo = document.getElementById("pass").value;
            if (fnev != "" && email != "" && jelszo != "") {
                document.getElementById("result").innerHTML = "Welcome" + nev + "!";
                document.getElementById("result").style.color = "Black";
            }
            else {
                document.getElementById("result").style.color = "red";
                document.getElementById("result").innerHTML = "Valamelyik mező nincs kitöltve!";
            }

        }
        document.querySelector("input[type='submit']").onclick = Udvozles;
    </script>

</body>

</html>