<?php
$pdo = new PDO('mysql:host=localhost;dbname=liste', 'Moritz', 'xxxaA1234Aa...');

$eingabe =_POST('eingabe');

$sql = "SELECT * FROM bestellen WHERE Vorname = ?";
$sth = $pdo->prepare($sql);
$sth->execute(array($eingabe));
$back = $sth->fetch();
?>