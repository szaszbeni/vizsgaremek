<link rel="stylesheet" href="vizsga.css">
<title>Registration</title>

    <header id="fejlec">
        <nav id="nav">
            <ul id="links">
                <li><a href="login_form.php">Bejelentkezes</a></li>
                <li><a href="reg_form.php">Regisztracio</a></li>
            </ul>
        </nav>
    </header>

    <form action="reg_ir.php" method="post" target="kisablak">
        <h1>Welcome!</h1>
        <h2 for="uname">Nickname:</h2>
        <input type="text" id="uname" name="uname"><br>
        <h2 for="uemail">Email:</h2>
        <input type="text" id="uemail" name="uemail"><br>
        <h2 for="pass">Password:</h2>
        <input type="password" id="pass" name="pass"><br>
        <input type="submit" value="Registration">
        <p id="result"></p>
    </form>

    <script>
        function Udvozles() {
            let fnev = document.getElementById("uname").value;
            let email = document.getElementById("uemail").value;
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