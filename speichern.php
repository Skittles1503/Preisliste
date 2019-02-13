<?php
$pdo = new PDO('mysql:host=localhost;dbname=liste', 'Moritzroot', 'SzC7qsR9b3dz4LVZ');

$bezeichnung = $_POST['bezeichnung'];
$preis = $_POST['preis'];

$statement = $pdo->prepare ("INSERT INTO preise (bezeichnung, preis) VALUES (?, ?)");
$statement->execute(array($bezeichnung, $preis));

header("Location: abfrage.php#success");
