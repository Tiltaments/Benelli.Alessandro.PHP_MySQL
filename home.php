<?php session_start(); ?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Palestra 648 - Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'topbar.php'; ?>
    <?php include 'menu.php'; ?>

    <div id="content">
        <h1>Benvenuti in Palestra 648</h1>
        <img src="img/palestra.jpg" alt="La Palestra" style="width:100%; max-height:400px; object-fit:cover; border-radius:8px;">
        <h2>La tua salute, la nostra passione</h2>
        <p>Allenati in un ambiente moderno con i migliori professionisti. Scopri i nostri corsi e le nostre sale attrezzate per ogni esigenza.</p>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>