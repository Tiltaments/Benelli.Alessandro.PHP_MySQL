<?php
session_start();
require_once('connection.php');

// BLOCCO DI SICUREZZA: Se l'utente non è loggato, lo rimando al login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit; // L'exit è fondamentale per fermare il caricamento del resto della pagina se l'utente non è autenticato
}
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Area Personale</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'topbar.php';
    include 'menu.php'; ?>

    <div id="content">
        <h1>Storico Acquisti di <?php echo htmlspecialchars($_SESSION['user_nome']); ?></h1>

        <?php if (isset($_GET['msg'])) echo "<p style='color:green; font-weight:bold;'>Acquisto completato con successo!</p>"; ?>

        <table border="1" cellpadding="10" style="border-collapse: collapse; width:100%; background:white;">
            <tr style="background:#2c3e50; color:white;">
                <th>Pacchetto Acquistato</th>
                <th>Prezzo</th>
                <th>Data e Ora</th>
            </tr>
            <?php
            $uid = $_SESSION['user_id'];

            // Salviamo la query in una variabile per evitare l'errore "null given"
            $sql = "SELECT * FROM `$tab_acquisti` WHERE id_cliente = $uid ORDER BY data_ora DESC";
            $res = $conn->query($sql);

            if ($res && $res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['pacchetto']) . "</td>";
                    echo "<td>€ " . htmlspecialchars($row['prezzo']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['data_ora']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3' style='text-align:center;'>Nessun acquisto effettuato.</td></tr>";
            }
            ?>
        </table>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>