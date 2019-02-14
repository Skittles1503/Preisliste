<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=liste', 'Moritzroot', 'SzC7qsR9b3dz4LVZ');

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
    $sessioninsert =$pdo->prepare("INSERT INTO sessions (sessionid) VALUES (?)");
    $sessioninsert->execute(array($session));



 } else{
            return "false";
            echo "Passwort war falsch";
        }
    }    
login($email, $passwort);