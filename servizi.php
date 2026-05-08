<?php session_start(); ?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Palestra 648 - Servizi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'topbar.php'; ?>
    <?php include 'menu.php'; ?>

    <div id="content">
        <h1>I Nostri Servizi</h1>
        <div class="card-container">
            <div class="card">
                <img src="img/sala_pesi.jpg" alt="Sala Pesi">
                <h3>Sala Pesi</h3>
                <p>Macchinari all'avanguardia per l'allenamento muscolare.</p>
            </div>
            <div class="card">
                <img src="img/sala fitness.jpg" alt="Fitness">
                <h3>Corsi Fitness</h3>
                <p>Zumba, Pilates e Yoga in aule luminose e spaziose.</p>
            </div>
            <div class="card">
                <img src="img/sauna.jpg" alt="Sauna">
                <h3>Area Relax</h3>
                <p>Sauna per il recupero fisico post-allenamento.</p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>