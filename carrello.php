<?php
session_start();
// Aggiunta elemento al carrello
if (isset($_POST['pacc'])) {
    $_SESSION['carrello'][] = array("nome" => $_POST['pacc'], "prezzo" => $_POST['prezzo']);
}
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Carrello</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'topbar.php';
    include 'menu.php'; ?>
    <div id="content">
        <h1>Il tuo Carrello</h1>
        <?php if (empty($_SESSION['carrello'])): ?>
            <p>Il carrello è vuoto. Visita i <a href="pacchetti.php">Pacchetti</a>.</p>
        <?php else: ?>
            <ul style="font-size:1.2em; line-height:2;">
                <?php
                $totale = 0;
                foreach ($_SESSION['carrello'] as $item):
                    $totale += $item['prezzo'];
                ?>
                    <li><?php echo $item['nome']; ?> - € <?php echo $item['prezzo']; ?></li>
                <?php endforeach; ?>
            </ul>
            <h2>Totale: € <?php echo number_format($totale, 2); ?></h2>
            <form action="checkout.php" method="post">
                <input type="submit" value="Conferma Acquisto" style="font-size:1.1em; padding:15px;">
            </form>
        <?php endif; ?>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>