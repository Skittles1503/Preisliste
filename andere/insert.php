<?php

if(isset($_POST['email']) && isset($_POST['passwort']) && isset($_POST['vorname']) && isset($_POST['nachname'])) { 
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$mail = $_POST['email'];
$vorname= $_POST['vorname'];
$nachname= $_POST['nachname'];
$passwort= $_POST['passwort'];

$statement = $pdo->prepare ("INSERT INTO users (email, passwort, vorname, nachname) VALUES (?, ?, ?, ?)");
$statement->execute(array($mail, password_hash($passwort, PASSWORD_DEFAULT), $vorname, $nachname));
    header("Location: post.php#success");
} else {
    header("Location: post.php");
}