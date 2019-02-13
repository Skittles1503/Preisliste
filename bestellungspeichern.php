<?php
$pdo = new PDO('mysql:host=localhost;dbname=liste', 'root', '');

$vorname = $_POST['vorname'];
$artikel = $_POST['artikel'];
$preis = $_POST['preis'];
$gegeben = $_POST['gegeben'];

$statement = $pdo->prepare ("INSERT INTO bestellen (Vorname, Artikel, Preis, gegeben ) VALUES (?, ?, ?, ?)");
$statement->execute(array($bezeichnung, $preis));


?>