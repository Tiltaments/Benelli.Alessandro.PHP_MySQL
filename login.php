<?php session_start(); ?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'topbar.php';
    include 'menu.php'; ?>
    <div id="content">
        <h1>Accesso</h1>
        <?php if (isset($_GET['errore'])) echo "<p style='color:red;'>Credenziali errate.</p>"; ?>
        <?php if (isset($_GET['msg'])) echo "<p style='color:green;'>Registrazione ok. Ora puoi accedere.</p>"; ?>

        <div style="background:white; padding:20px; border-radius:8px; width:400px; box-shadow:0 0 5px rgba(0,0,0,0.1);">
            <form action="login_action.php" method="post">
                <label>Email:</label><input type="text" name="email" required>
                <label>Password:</label><input type="password" name="psw" required>
                <input type="submit" value="Accedi">
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>