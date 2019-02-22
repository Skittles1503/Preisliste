<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <link href="../style/registerform.css" rel="stylesheet">
</head>
<script>

</script>
<div class="container">
<div id="div1">
    <div id="gologin">
        <a href="loginformular.php" id="gotologin">Zum Loginbereich</a>
    </div>
</div>
<div id="success">Benutzer eingefügt</div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="register.php" method="post" id="login">
                <input type="email" class="form-control" id="emailinput" aria-describedby="emailHelp" placeholder="Enter email" name="email" minlength="5" required>
                <input type="password" class="form-control" id="passwordinput" name="passwort" placeholder="Enter password" minlength="5" required>
                <input type="text" class="form-control" id="firstnameinput" name="vorname" placeholder="Enter first given name" minlength="3" required>
                <input type="text" class="form-control" id="surnameinput" name="nachname" placeholder="Enter surname" minlength="2" required>
                
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2">
            <button class="btn btn-primary" type="submit">registrieren</button>
            <button class="btn btn-primary" id="loginarea" onclick="location.replace('loginformular.php')">zum Loginbereich</button>
        </div>
        <div class="col-md-5"></div>
            
            </form>
        
        </div>
    </div>
 



</div>
</div>

<script>
</script>
</form>