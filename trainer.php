<?php
session_start();
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Palestra 648 - Trainer</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'topbar.php'; ?>
    <?php include 'menu.php'; ?>

    <div id="content">
        <h1>Il Nostro Team</h1>
        <div class="card-container">
            <?php
            $sql = "SELECT * FROM `$tab_istruttori`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='card'>";
                    echo "<img src='img/" . $row['nome'] . "_trainer.jpg' alt='Trainer'>";
                    echo "<h3>" . $row['nome'] . " " . $row['cognome'] . "</h3>";
                    echo "<p><strong>Spec:</strong> " . $row['specializzazione'] . "</p>";
                    echo "</div>";
                }
            }
            ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>