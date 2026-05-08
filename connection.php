<?php
require_once('dati_generali.php');

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}
