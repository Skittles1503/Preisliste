<div id="formular">
<link href="ausgabe.css" rel="stylesheet">

<?php
$pdo = new PDO('mysql:host=localhost;dbname=liste', 'Moritzroot', 'SzC7qsR9b3dz4LVZ');
 


$eingabe = $_POST['eingabe'];


$sql = "SELECT * FROM preise WHERE bezeichnung = ?";
$sth = $pdo->prepare($sql);
$sth->execute(array($eingabe));
$back = $sth->fetch();

echo '<div id="ausgabe">';
echo $back['bezeichnung']." kostet: ".$back['preis']."€"."<br />";
echo '</div>';





/*
$sql = "SELECT * FROM preise WHERE bezeichnung = '$eingabe'";
$back = $pdo->query($sql)->fetch();
echo $back['bezeichnung']." ".$back['preis']."<br />";
*/
?>

<form action="abfrage.php">
<button type="submit" id="new">Neue Abfrage</button>
</div>