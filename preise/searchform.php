<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="../style/login.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optionales Theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
</head>
<?php
session_start();
$session = session_id();

if (isset($_SESSION["x"])){

$pdo = new PDO('mysql:host=localhost;dbname=liste;charset=utf8mb4', 'Moritzroot', 'SzC7qsR9b3dz4LVZ');

$sql = "SELECT * FROM sessions WHERE sessionid = ?";
$sth = $pdo->prepare($sql);
if($sth->execute(array($session))) {
    $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    if(count($rows)>0) {
        foreach($rows as $back) {
        }
    $select =  $pdo->prepare("SELECT * from login WHERE id = ?");
    $select->execute(array($back['userid']));
        $rows = $select->fetchALL(PDO::FETCH_ASSOC);
        echo "<div id='salat'>eingelogt als: ".$rows[0]['vorname']."  ".$rows[0]['nachname']."<br /></div>";
     
    }}
?>

<style>
    #top {
    }
    #salat{
        float: right;
        margin-top: -20px;
    }
    #logoutbutton{
        float:right;
        margin-top:18px;
        margin-right:20px;
    }
    #newproductbutton {
        padding-top: 12px;
    }
    </style>
<div id="top">
    <div id="div1">
        <div id="logoutbutton">
            <button type="button" class="btn btn-primary" onclick="location.replace('sessiondestroy.php')">Logout</button>
        </div>
        <div id="newproductbutton">
            <a class="btn btn-primary" href="#" role="button">enter new product</a>
        </div>
</div>


<div id="formular">
    <div id="success">Produkt gespeichert</div>
        <form action="output.php" method="post">
            Gesuchter Artikel:<br>
            <input type="search" list="Produkte" autocomplete="off" id="eingabefeld" size="40" maxlength="250" name="eingabe"><br><br>
            <input type="submit" id="sub" value="Abschicken">
        </form>
<form action="saveformular.php">

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
}
else {
    header("Location: ../login/loginformular.php#notloggedin");
}

?>
</datalist>

<script>
div1.appendChild(salat);
</script>



