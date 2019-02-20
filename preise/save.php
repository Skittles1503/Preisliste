<?php
$pdo = new PDO('mysql:host=localhost;dbname=liste;charset=utf8mb4', 'Moritzroot', 'SzC7qsR9b3dz4LVZ');

$bezeichnung = $_POST['bezeichnung'];
$preis = $_POST['preis'];

$statement = $pdo->prepare ("INSERT INTO preise (bezeichnung, preis) VALUES (?, ?)");
$statement->execute(array($bezeichnung, $preis));

header("Location: searchform.php#success");
