    <title>Login</title>
    <link rel="stylesheet" href="vizsga.css">
    <header id="fejlec">
        <nav id="nav">
            <ul id="links">
                <li><a href="login_form.php">Bejelentkezes</a></li>
                <li><a href="reg_form.php">Regisztracio</a></li>
            </ul>
        </nav>
    </header>
    <form action="login_ir.php" method="post" target="kisablak">
        <h1>Login</h1>
        <h2 for="email">Email:</h2>
        <input name="email" type="email" placeholder="e-mail cím:">
        <h2 for="pass">Password:</h2>
        <input name="pass" type="password" placeholder="jelszó:">
        <input type="submit" value="Login">
    </form>