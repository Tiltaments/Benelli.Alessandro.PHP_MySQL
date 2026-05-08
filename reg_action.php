<?php
require_once('connection.php');

$nome = $conn->real_escape_string($_POST['nome']);
$cognome = $conn->real_escape_string($_POST['cognome']);
$cf = $conn->real_escape_string($_POST['cf']);
$email = $conn->real_escape_string($_POST['email']);
$psw = $conn->real_escape_string($_POST['psw']); // Versione base senza hashing

$sql = "INSERT INTO `$tab_clienti` (nome, cognome, cf, email, password) VALUES ('$nome', '$cognome', '$cf', '$email', '$psw')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php?msg=registrato");
} else {
    echo "Errore durante la registrazione: " . $conn->error;
}
