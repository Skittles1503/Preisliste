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
    $select =  $pdo->prepare("SELECT * from login WHERE id = ?");
    $select->execute(array($back['userid']));
        $rows = $select->fetchALL(PDO::FETCH_ASSOC);
        echo " Hallo: ".$rows[0]['vorname']."  ".$rows[0]['nachname']."<br />";
     

            
    } else {
        echo '<div id="nothing">';
        echo "Sie sind nicht eingelogt";
        echo '</div>';
        echo '<form action="../login/loginformular.php">';
        echo '<input type="submit" value="Zum Login">';
    }}
?>