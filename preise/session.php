<?php
session_start();
$session = session_id();
$pdo = new PDO('mysql:host=localhost;dbname=liste', 'Moritzroot', 'SzC7qsR9b3dz4LVZ');

$sql = "SELECT * FROM sessions WHERE sessionid = ?";
$sth = $pdo->prepare($sql);
if($sth->execute(array($session))) {
    $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    if(count($rows)>0) {
        foreach($rows as $back) {
            echo '<div id="ausgabe">';
            header("Location: searchform.php");
            echo '</div>';
        }
    } else {
        echo '<div id="nothing">';
        echo "Sie sind nicht eingelogt";
        echo '</div>';
        echo '<form action="../login/loginformular.php">';
        echo '<input type="submit" value="Zum Login">';
    }}
?>