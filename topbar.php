<?php if (session_status() == PHP_SESSION_NONE) session_start(); ?>
<div id="topbar">
    <?php if (isset($_SESSION['user_id'])): ?>
        Benvenuto,&nbsp <strong><?php echo htmlspecialchars($_SESSION['user_nome']); ?> &nbsp </strong> |
        <a href="area_personale.php">I Miei Acquisti</a> &nbsp |
        <a href="logout.php" style="color: #e74c3c;">Logout</a>
    <?php else: ?>
        <a href="login.php">Login</a> &nbsp | <a href="registrazione.php">Registrati</a>
    <?php endif; ?>

    &nbsp | <a href="carrello.php">🛒 Carrello (<?php echo isset($_SESSION['carrello']) ? count($_SESSION['carrello']) : 0; ?>)</a>
</div>