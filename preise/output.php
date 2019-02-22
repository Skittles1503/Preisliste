<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optionales Theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <link href="../style/ausgabe.css" rel="stylesheet">
</head>
<div id="top">
<a href="searchform.php" id="newproduct">Neues Produkt</a>
</div>
<div id="formular">


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

<button type="button" class="btn btn-primary" onclick="location.replace('searchform.php')">Neue Abfrage</button>
</div>