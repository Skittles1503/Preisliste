<div id="top">
<a href="searchform.php" id="newproduct">Neues Produkt</a>
</div>
<div id="formular">
<link href="../style/ausgabe.css" rel="stylesheet">

<?php
$pdo = new PDO('mysql:host=localhost;dbname=liste', 'Moritzroot', 'SzC7qsR9b3dz4LVZ');
 


$eingabe = $_POST['eingabe'];


$sql = "SELECT * FROM preise WHERE bezeichnung = ?";
$sth = $pdo->prepare($sql);
if($sth->execute(array($eingabe))) {
    $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    if(count($rows)>0) {
        foreach($rows as $back) {
            echo '<div id="ausgabe">';
            echo $back['bezeichnung']." kostet: ".$back['preis']."€"."<br />";
            echo '</div>';
        }
    } else {
        echo '<div id="nothing">';
        echo "Kein Eintrag gefunden. Bitte Produkt eintragen!";
        echo '</div>';
    }
}







/*
$sql = "SELECT * FROM preise WHERE bezeichnung = '$eingabe'";
$back = $pdo->query($sql)->fetch();
echo $back['bezeichnung']." ".$back['preis']."<br />";
*/
?>

<form action="searchform.php">
<button type="submit" id="new">Neue Abfrage</button>
</div>