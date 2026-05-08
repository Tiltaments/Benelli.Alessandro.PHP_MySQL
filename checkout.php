<?php
session_start();
require_once('connection.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php?errore=DeviLoggarti");
    exit;
}

if (!empty($_SESSION['carrello'])) {
    $id_cliente = $_SESSION['user_id'];

    foreach ($_SESSION['carrello'] as $item) {
        $pacc = $conn->real_escape_string($item['nome']);
        $prezzo = $item['prezzo'];
        $sql = "INSERT INTO `$tab_acquisti` (id_cliente, pacchetto, prezzo) VALUES ($id_cliente, '$pacc', $prezzo)";
        $conn->query($sql);
    }

    // Svuota il carrello dopo l'acquisto
    unset($_SESSION['carrello']);
}

header("Location: area_personale.php?msg=AcquistoCompletato");
exit;
