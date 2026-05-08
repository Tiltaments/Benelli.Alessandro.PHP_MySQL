<?php
session_start();
require_once('connection.php');

$email = $conn->real_escape_string($_POST['email']);
$psw = $conn->real_escape_string($_POST['psw']);

$sql = "SELECT id, nome FROM `$tab_clienti` WHERE email = '$email' AND password = '$psw'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_nome'] = $row['nome'];
    header("Location: home.php");
} else {
    header("Location: login.php?errore=1");
}
