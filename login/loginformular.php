<?php
    session_start();
?>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="../style/login.css" rel="stylesheet">
<!-- Das neueste kompilierte und minimierte CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optionales Theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
</head>
<div id="div1">


<div id="success">erfolgreich registriert</div>
<div id="fail">Email oder Passwort falsch</div>
<div id="logout">Sie wurden erfolgreich ausgelogt!</div>
<div id="notloggedin">Bitte zuerst einloggen!</div>
<div id=registerlink>
<a href="registerformular.php" id="registernew">Als neuer Nutzer registrieren</a>
</div>
</div>
<div id="form">
<form action="userlogin.php" method="post">
<h2 class="form-signin-heading">Bitte melden Sie sich an</h2>
    <div class="form-group">
        <label for="email">E-Mail:</label>
        <input type="email" class="form-control" size="40" maxlength="250" name="email">
    </div>
    <div class="form-group">
        <label for="passwort">Dein Passwort:</label>
        <input type="password" class="form-control" size="40"  maxlength="250" name="passwort">
    </div>
        <input class="btn btn-primary" type="submit" value="Submit">
</form>
</div>
<?php $session = session_id(); 
echo $session;

?> 
