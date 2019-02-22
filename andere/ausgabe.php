<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=liste', 'Moritz', 'xxxaA1234Aa...');
 
} catch (PDOExpetion    $th) {
    echo $th->error_log;
}

$eingabe = $_POST['eingabe'];


$sql = "SELECT * FROM preise WHERE bezeichnung = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute(array($eingabe));
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo $result['bezeichnung'];  
echo "<br>";
echo "kostet: ".$result['preis'];
echo "<br>";--

?>
<form action="abfrage.php">
<button type="submit">Neue Abfrage</button>