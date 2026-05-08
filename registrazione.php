<?php session_start(); ?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Registrazione</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'topbar.php';
    include 'menu.php'; ?>
    <div id="content">
        <h1>Nuovo Utente</h1>
        <div style="background:white; padding:20px; border-radius:8px; width:400px; box-shadow:0 0 5px rgba(0,0,0,0.1);">
            <form action="reg_action.php" method="post">
                <label>Nome:</label><input type="text" name="nome" required>
                <label>Cognome:</label><input type="text" name="cognome" required>
                <label>Codice Fiscale:</label><input type="text" name="cf" required>
                <label>Email:</label><input type="text" name="email" required>
                <label>Password:</label><input type="password" name="psw" required>
                <input type="submit" value="Registrati">
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>