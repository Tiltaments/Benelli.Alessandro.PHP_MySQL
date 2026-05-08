<?php session_start(); ?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Pacchetti</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'topbar.php';
    include 'menu.php'; ?>
    <div id="content">
        <h1>Acquista Abbonamento</h1>
        <div class="card-container">
            <div class="card">
                <h2>Base</h2>
                <h3 style="color:#1abc9c;">€ 150.00</h3>
                <form action="carrello.php" method="post">
                    <input type="hidden" name="pacc" value="Pacchetto Base">
                    <input type="hidden" name="prezzo" value="150.00">
                    <input type="submit" value="Aggiungi al Carrello">
                </form>
            </div>
            <div class="card">
                <h2>Premium</h2>
                <h3 style="color:#1abc9c;">€ 220.00</h3>
                <form action="carrello.php" method="post">
                    <input type="hidden" name="pacc" value="Pacchetto Premium">
                    <input type="hidden" name="prezzo" value="220.00">
                    <input type="submit" value="Aggiungi al Carrello">
                </form>
            </div>
            <div class="card">
                <h2>VIP</h2>
                <h3 style="color:#1abc9c;">€ 300.00</h3>
                <form action="carrello.php" method="post">
                    <input type="hidden" name="pacc" value="Pacchetto VIP">
                    <input type="hidden" name="prezzo" value="300.00">
                    <input type="submit" value="Aggiungi al Carrello">
                </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>