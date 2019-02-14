<html>
<div id="top">
<a href="output.php." id="newproduct">Neues Produkt</a>
<a href="session.php" id="logintest">Bin ich eingelogt?</a>
</div>
<link href="../style/abfrage.css" rel="stylesheet">

<div id="formular">
<div id="success">Produkt gespeichert</div>

<form action="output.php" method="post">
Gesuchter Artikel:<br>

<input type="search" list="Produkte" autocomplete="off" id="eingabefeld" size="40" maxlength="250" name="eingabe"><br><br>


<input type="submit" id="sub" value="Abschicken">
</form>
<form action="output.php">
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
foreach($back as $product) {
    echo "<option value=\"".$product["bezeichnung"]."\">";
}

?>
</datalist>


