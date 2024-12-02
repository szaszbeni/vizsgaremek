<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Admin Beállítások</title>
    <link rel="stylesheet" href="vizsga.css">
    <style>
        body { 
            background-image: url("../kepek/hatter3.jpeg");
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0; 
        } 

        .container { 
            width: 80%; 
            max-width: 900px; 
            margin: 0 auto; 
            padding: 20px; 
            background-color: #fff; 
            border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
        h1 { 
            font-size: 24px; 
            color: #333; 
        } 
        h2 { 
            font-size: 20px; 
            color: #444; 
        } 
        .section { 
            margin-bottom: 20px; 
        } 
        label { 
            display: block; 
            margin: 8px 0; 
            font-size: 16px; 
        } 
        input[type="text"], input[type="password"], textarea, select { 
            width: 100%; 
            padding: 8px; 
            margin: 5px 0; 
            font-size: 16px; 
            border-radius: 4px; 
            border: 1px solid #ccc; 
        } 
        input[type="checkbox"] { 
            margin-right: 10px; 
        } 
        button { 
            background-color: #4CAF50; 
            color: white; padding: 12px 20px; 
            border: none; border-radius: 4px; 
            cursor: pointer; 
        } 
        button:hover { 
            background-color: #45a049; 
        } 
        .actions { 
            margin-top: 20px; 
        } 
        .alert { 
            padding: 10px; 
            margin: 10px 0; 
            background-color: #4CAF50; 
            color: white; 
            border-radius: 4px; 
            text-align: center; 
        } 
    </style>
</head>
<body> 
    <div class="container">
        <h1>Admin Beállítások</h1> 
        <form action="settings.php" method="POST" id="settings-form"> 
            <div class="section"> 
                <h2>Weboldal Beállítások</h2> 
                <label for="site-title">Weboldal cím:</label> 
                <input type="text" id="site-title" name="site-title" value="<?= isset($_POST['site-title']) ? htmlspecialchars($_POST['site-title']) : 'Chat Weboldal'; ?>"> 
                <label for="site-description">Weboldal leírása:</label>
                <textarea id="site-description" name="site-description"><?= isset($_POST['site-description']) ? htmlspecialchars($_POST['site-description']) : 'Ez a chat weboldal leírása.'; ?></textarea> 
            </div> 
            <div class="section"> 
                <h2>Biztonsági Beállítások</h2> 
                <label for="two-factor-auth">Kétfaktoros hitelesítés:</label>
                <input type="checkbox" id="two-factor-auth" name="two-factor-auth" <?= isset($_POST['two-factor-auth']) && $_POST['two-factor-auth'] === 'on' ? 'checked' : ''; ?> >
                <label for="password-policy">Jelszó erősségi szabályok:</label> 
                <select id="password-policy" name="password-policy"> 
                    <option value="strong" <?= isset($_POST['password-policy']) && $_POST['password-policy'] === 'strong' ? 'selected' : ''; ?>>Erős</option> 
                    <option value="medium" <?= isset($_POST['password-policy']) && $_POST['password-policy'] === 'medium' ? 'selected' : ''; ?>>Közepes</option> 
                    <option value="weak" <?= isset($_POST['password-policy']) && $_POST['password-policy'] === 'weak' ? 'selected' : ''; ?>>Gyenge</option> 
                </select> 
            </div> 
            <div class="section"> 
                <h2>Moderálási Beállítások</h2>
                <label for="enable-moderation">Moderálás engedélyezése:</label> 
                <input type="checkbox" id="enable-moderation" name="enable-moderation" <?= isset($_POST['enable-moderation']) ? 'checked' : ''; ?>> 
                <label for="auto-ban">Automatikus ban alkalmazása:</label> 
                <input type="checkbox" id="auto-ban" name="auto-ban" <?= isset($_POST['auto-ban']) ? 'checked' : ''; ?>> 
            </div>
            <div class="actions"> 
                <button type="submit" name="submit">Beállítások mentése</button> 
            </div> 
        </form> 

        <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
            $site_title = $_POST['site-title'] ?? '';
            $site_description = $_POST['site-description'] ?? ''; 
            $two_factor_auth = isset($_POST['two-factor-auth']) ? 'on' : 'off'; 
            $password_policy = $_POST['password-policy'] ?? 'medium'; 
            $enable_moderation = isset($_POST['enable-moderation']) ? 'on' : 'off'; 
            $auto_ban = isset($_POST['auto-ban']) ? 'on' : 'off'; 

            $settings = [
                'site_title' => $site_title,
                'site_description' => $site_description,
                'two_factor_auth' => $two_factor_auth,
                'password_policy' => $password_policy,
                'enable_moderation' => $enable_moderation,
                'auto_ban' => $auto_ban
            ]; 

            file_put_contents('settings.json', json_encode($settings, JSON_PRETTY_PRINT)); 
            echo '<div class="alert">A beállítások sikeresen mentésre kerültek!</div>'; 
        }
        ?>
    </div>
</body> 
</html>
