<html>
<div id="top">
<a href="eingabe.php." id="newproduct">Neues Produkt</a>
</div>
<link href="abfrage.css" rel="stylesheet">

<div id="formular">
<div id="success">Produkt gespeichert</div>

<form action="ausgabe2.php" method="post">
Gesuchter Artikel:<br>

<input type="search" list="Produkte" autocomplete="off" id="eingabefeld" size="40" maxlength="250" name="eingabe"><br><br>


<input type="submit" id="sub" value="Abschicken">
</form>
<form action="eingabe.php">
<button type="submit" id="newarticle">Neuen Artikel eintragen</button>
</form>
</div>

<datalist id="Produkte">
<?php
$pdo = new PDO('mysql:host=localhost;dbname=liste', 'root', '');

$sql = "SELECT bezeichnung FROM preise";
$sth = $pdo->prepare($sql);
$sth->execute();
$back = $sth->fetchAll(PDO::FETCH_ASSOC);
for($i=0;$i<count($back);$i++) {
    $product = $back[$i];
    echo "<option value=\"".$product["bezeichnung"]."\">";
}

?>
</datalist>


