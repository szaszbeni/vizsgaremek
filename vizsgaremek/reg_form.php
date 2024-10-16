<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <style>
    body {
    background-image: url("kepek/rhatter.jpg");
}

#fejlec{
    box-sizing: border-box;
    height: 45px;
    padding: 20px 10px 10px;
    background-color:  #3d3c4d;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

nav ul li {
    display: inline;
    margin: 0 15px; 
}

nav ul li a {
    color: white; 
    text-decoration: none; 
    font-weight: bold; 
}

form {
    background-color: #3d3c4d;
    padding: 60px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    color: #c4c4c4;
    width: 400px;
    height: 400px;
    margin-top: 20px;
    margin-left: 400px;
}

form input[type="text"],
form input[type="email"],
form input[type="password"] {
    width: 100%;
    height: 30px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #000000;
    color: #ccc;
}

form h1{
    font-size: 220%;
    text-align: center;
}

form h2 {
    font-size: 120%;
    font-weight: bold;
    display: block;
    margin-top: 18px;
}

form input[type="submit"] {
    background-color: #410000;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    height: 40px;
    margin-top: 40px;
}

form input[type="submit"]:hover {
    background-color: #000000;
}

#result {
    margin-left: 20px;
    font-size:25px;
}

        
    </style>
</head>

<body>
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

</body>

</html>