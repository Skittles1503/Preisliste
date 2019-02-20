<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=liste;charset=utf8mb4', 'Moritzroot', 'SzC7qsR9b3dz4LVZ');
$_SESSION["x"] = 0;
$email = $_POST['email'];
$passwort = $_POST['passwort'];

function login ($email, $passwort){
    global $pdo;
    $check = $pdo->prepare('SELECT * FROM login WHERE email=?');
    $check->execute(array($email));

$result = $check->fetch();
if(password_verify($passwort, $result['passwort'])) {
    echo "Passwort war korrekt";
    header("Location:../preise/session.php");
   $session = session_id();
    $sessioninsert =$pdo->prepare("INSERT INTO sessions (sessionid, userid) VALUES (?,?)");
    $sessioninsert->execute(array($session, $result["id"]));



 } else{
            //return "false";
            header("Location:loginformular.php#fail");
        }
    }    
login($email, $passwort);